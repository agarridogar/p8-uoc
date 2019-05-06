<?php
require_once 'model/model_usuario.php';



class UsuarioController  {
    
    private $model_usuario;
    
    public function __CONSTRUCT(){
        $this->model_usuario = new Usuario();
    }
    
    public function LoginUsuario(){
        require_once 'view/header.php';
        require_once 'view/usuario/vista_login_usuario.php';
        require_once 'view/footer.php';
    }

   

}