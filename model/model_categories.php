<?php class Categories {
	private $pdo;

	public function __CONSTRUCT() {
		try {
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function getAllCategories() {
		try {
			$stm = $this->pdo->prepare("SELECT * FROM categorias");
			$stm->execute();
			return $stm->fetchAll();
		}
		catch(Exception $e) {
			die($e->getMessage());
		}
    }
    
    public function addCategory($data) {
		try {
			$stm = $this->pdo->prepare("INSERT INTO categorias (categoria_barco)
            VALUES (?);");
            $stm->execute(array(
                $data['category']
            ));
		}
		catch(Exception $e) {
			die($e->getMessage());
		}
	}
} ?>