<?php class Boats {
	private $pdo;

	public function __CONSTRUCT() {
		try {
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function getAllBoats() {
		try {
			$stm = $this->pdo->prepare("SELECT * FROM barcos");
			$stm->execute();
			return $stm->fetchAll();
		}
		catch(Exception $e) {
			die($e->getMessage());
		}
    }
    
    public function addBoat($data) {
		try {
			$stm = $this->pdo->prepare("INSERT INTO barcos (puerto_id, categoria_id, descripcion_barco ,max_pasajeros, barco_imagen, precio_pack)
            VALUES (?, ? ,?, ?, ?, ?);");
            $stm->execute(array(
                $data['port_id'],
                $data['category_id'],
                $data['desc'],
                $data['max'],
                $data['image'],
                $data['price']
            ));
		}
		catch(Exception $e) {
			die($e->getMessage());
		}
	}
	 
		public function infoBoat($barco_id){
			try {
				$stm = $this->pdo->prepare("SELECT * FROM barcos WHERE barco_id='$barco_id'");
				$stm->execute();
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(Exception $e) {
				die($e->getMessage());
			}
		}
} ?>