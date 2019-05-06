<?php


require __DIR__ . '/usuario.controller.php';

class WebController{

    public function Index(){
        require_once 'view/header.php';
        require_once 'view/home.php';
        require_once 'view/footer.php';
    }


}

?>