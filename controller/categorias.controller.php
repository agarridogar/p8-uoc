<?php
require_once 'model/modelo_categorias.php';




class CategoriasController  {
    
    private $model_cat;
    
    
    public function __CONSTRUCT(){
        $this->model_cat = new Categorias();
        
    }
    
    public function ListarVistaCategorias(){
        require_once 'view/header.php';
        require_once 'view/categorias/vista_categorias.php';
        require_once 'view/footer.php';
    }
    //muestra los barcos que hay en cada categoría
    public function VerCategoriasBarco(){
        require_once 'view/header.php';
        require_once 'view/categorias/vista_categorias_barcos.php';
        require_once 'view/footer.php';
 
        
    }

   
    
}