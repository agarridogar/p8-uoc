<?php

require_once 'model/database.php';

class Categorias{
    
    private $pdo;

    public $categoria_id;
    public $categoria_barco;

    
    public function __CONSTRUCT(){
        try{
            $this->pdo = Database::StartUp();     
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function ListarCategorias(){
		try{
			$stm = $this->pdo->prepare("SELECT * FROM categorias");

			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
    } 
    
    






}


?>