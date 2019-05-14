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
            $stm->execute([
                $data['category']
			]);
			return 'Transition OK';
		}
		catch(Exception $e) {
			return $e->getMessage();
		}
	}

	public function deleteCategory($id) {
		try {
			$stm = $this->pdo->prepare("DELETE FROM categorias WHERE categoria_id=?;");
			$stm->execute([$id]);
			return 'Transition OK';
		}
		catch(Exception $e) {
			return $e->getMessage();
		}
    }
} ?>