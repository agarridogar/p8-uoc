<?php
require_once 'usuario.controller.php';
require_once 'model/model_boats.php';
require_once 'model/model_products.php';

class WebController{

    

    public function Index(){
        require_once 'view/header.php';
        require_once 'view/home.php';
        require_once 'view/footer.php';
    }

    public function Products() {

        $idProduct = $_REQUEST['id'];
        $productsModel = new Products();
        $product = $productsModel->getProductById($idProduct)[0];

        require_once 'view/header.php';
        require_once 'view/products.php';
        require_once 'view/footer.php';
    }
    public function faq() {
        
        require_once 'view/header.php';
        require_once 'view/faq/vista_faq.php';
        require_once 'view/footer.php';
    }


    //vista login usuario
    public function LoginUsuario(){

        $user = new Usuario();

        require_once 'view/header.php';
        require_once 'view/usuario/vista_login_usuario.php';
        require_once 'view/footer.php';
    }



    //vista registro usuario
    public function RegistroUsuarios(){
		
		$user= new Usuario();
		
		require_once 'view/header.php';
        require_once 'view/usuario/vista_registro_usuarios.php';
        require_once 'view/footer.php';

    }
    
    //vista registro contacto

    public function Contacto(){
        require_once 'view/header.php';
        require_once 'view/vista_contacto.php';
        require_once 'view/footer.php';    
    }
        
    


}

?>