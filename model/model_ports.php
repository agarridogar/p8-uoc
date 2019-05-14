<?php class Ports {
	private $pdo;

	public function __CONSTRUCT() {
		try {
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function getAllPort() {
		try {
			$stm = $this->pdo->prepare("SELECT * FROM puertos");
			$stm->execute();
			return $stm->fetchAll();
		}
		catch(Exception $e) {
			die($e->getMessage());
		}
    }
    
    public function addPort($data) {
		try {
			$stm = $this->pdo->prepare("INSERT INTO puertos (puerto_descripcion)
            VALUES (?);");
            $stm->execute([
                $data['port']
			]);
			return 'Transition OK';
		}
		catch(Exception $e) {
			return $e->getMessage();
		}
	}

	public function deletePort($id) {
		try {
			$stm = $this->pdo->prepare("DELETE FROM puertos WHERE puerto_id=?;");
			$stm->execute([$id]);
			return 'Transition OK';
		}
		catch(Exception $e) {
			return $e->getMessage();
		}
    }
} ?>