<?php
require_once 'model/model_usuario.php';



class UsuarioController  {
    
    private $model_usuario;
    
    public function __CONSTRUCT(){
        $this->model_usuario = new Usuario();
    }
    
    public function LoginUsuario(){

        $user = new Usuario();

        require_once 'view/header.php';
        require_once 'view/usuario/vista_login_usuario.php';
        require_once 'view/footer.php';
    }

    public function iniciarSesion(){
		
		$user = new Usuario();
		
		$user->nombre = $_REQUEST['nombre'];
		$pwd = $_REQUEST['password'];
		$password = sha1($pwd);
        $user->password = $password;
 		
		$this->model_usuario->Validar($user);

    }
    
    
    public function RegistroUsuarios(){
		
		$user= new Usuario();
		
		require_once 'view/header.php';
        require_once 'view/usuario/vista_registro_usuarios.php';
        require_once 'view/footer.php';

	}
    
    
    
    public function registrarUsuario(){

		$user = new Usuario();
          
        $user->nombre = $_REQUEST['nombre'];
        $user->roles_id = 2;
		$pwd = $_REQUEST['password'];
		$password = sha1($pwd);		
        $user->password = $password ;
        $user->email = $_REQUEST['email'];

       	$this->model_usuario->Registrar($user);        
    
	}

    

   

}