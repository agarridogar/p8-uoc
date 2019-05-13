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
            $stm->execute(array(
                $data['port']
            ));
		}
		catch(Exception $e) {
			die($e->getMessage());
		}
	}
} ?>