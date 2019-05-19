<?php
require_once 'model/model_products.php';

class CartController {
    public function Index(){
        $idProduct = $_REQUEST['id'];
        $productsModel = new Products();
        $product = $productsModel->getProductById($idProduct)[0];

        require_once 'view/header.php';
        require_once 'view/cart.php';
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