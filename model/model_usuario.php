<?php
class Usuario
{
	private $pdo;
    
    public $usuario_id;
	public $roles_id;
	public $nombre;
	public $password;
	public $email;


	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM usuarios");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($usuario_id)
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM usuarios WHERE usuario_id = ?");			          
			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($usuario_id)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM usuarios WHERE usuario_id = ?");			          
			$stm->execute(array($id));

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}



	public function Registrar(Usuario $data)
	{
		try 
		{
		$sql = "INSERT INTO usuarios (roles_id, nombre, password, email) 
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->roles_id,
                    $data->nombre, 
                    $data->password, 
                    $data->email, 
                )
			);
			header("Location: index.php?c=web&a=LoginUsuario");  
		} catch (Exception $e) 
		{
			$_SESSION['errorvalidacion'] ="Error en el registro. El nombre de usuario ya existe.";			
			header("Location: index.php?c=web&a=RegistroUsuarios");
		}
	}




	public function Validar($user){
		
		$sql = "SELECT a.nombre, b.roles_descripcion as roles_descripcion
		FROM usuarios a 
		INNER JOIN roles b where 
		(a.nombre = :nombre  AND a.password = :password) and a.roles_id = b.id_rol ;"; 

		$result = $this->pdo->prepare($sql); 
		$result->bindValue	(':nombre', $user->nombre, PDO::PARAM_STR);
		$result->bindValue(':password', $user->password, PDO::PARAM_STR);
		$result->execute(); 
		$count = $result->rowCount();
		$data=$result->fetch(PDO::FETCH_OBJ);
		
		if($count){
			$_SESSION['nombre']=$data->nombre;
			$sesion=$_SESSION['nombre'];

			$_SESSION['roles_descripcion']=$data->roles_descripcion;
			$sesionrol=$_SESSION['roles_descripcion'];
		
			//esto lo pongo de momento, luego redirigirá a la página de inicio
			header("Location: index.php");  

			//header("Location: index.php");
		}else{
			$_SESSION['erroracceso'] ="Error en acceso. Vuelva a introducir sus credenciales.";			
			header("Location: index.php?c=web&a=LoginUsuario"); 
		} 
	}
}