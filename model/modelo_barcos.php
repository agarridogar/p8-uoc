<?php

require_once 'model/database.php';


class Barcos{
    
    private $pdo;

	public $barco_id;
	public $categoria_id;
	public $puerto_id;
    public $descripcion_barco;
	public $max_pasajeros;
	public $barco_imagen;
	public $precio_pack;
    
    public function __CONSTRUCT(){
        try{
            $this->pdo = Database::StartUp();     
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    
    






}


?>