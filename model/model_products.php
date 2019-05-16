<?php
class Products {
	private $pdo;

	public function __CONSTRUCT() {
		try {
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function getProductById($id) {
		try {
			$stm = $this->pdo->prepare("SELECT * FROM barcos WHERE barco_id=?;");
			$stm->execute([$id]);
			return $stm->fetchAll();
		}
		catch(Exception $e) {
			die($e->getMessage());
		}
	}
}
?>