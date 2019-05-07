<?php
require_once 'model/model_usuario.php';



class UsuarioController  {
    
    private $model_usuario;
    
    public function __CONSTRUCT(){
        $this->model_usuario = new Usuario();
    }
    

    //función para que inicie sesión un usuario registrado
    
    public function iniciarSesion(){
		
		$user = new Usuario();
		
		$user->nombre = $_REQUEST['nombre'];
		$pwd = $_REQUEST['password'];
		$password = sha1($pwd);
        $user->password = $password;
 		
		$this->model_usuario->Validar($user);

    }
    
    
    //función para registrarse en la app
     
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