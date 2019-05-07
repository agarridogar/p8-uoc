<?php
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
        $product = $productsModel->getProductById($idProduct);

        require_once 'view/header.php';
        require_once 'view/products.php';
        require_once 'view/footer.php';
    }


}

?>