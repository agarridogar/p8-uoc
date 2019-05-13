<?php
require_once 'model/model_ports.php';
require_once 'model/model_categories.php';
require_once 'model/model_boats.php';

class DashboardController  {
    public function Index() {
        require_once 'view/dashboard/login.php';
    }

    public function boat() {
        $boatsModel = new Boats();
        $response = $boatsModel->getAllBoats();

        require_once 'view/dashboard/header.php';
        require_once 'view/dashboard/boats.php';
        require_once 'view/dashboard/modal.php';
        require_once 'view/dashboard/footer.php';
    }

    public function createBoat() {
        $boatsModel = new Boats();
        $response = $boatsModel->addBoat($_POST);

        // $data = $_POST;
        // header('Content-Type: application/json');
        // echo json_encode($data);
    }

    public function deleteBoat() {
        $boatsModel = new Boats();

        $data = $_POST;
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function category() {
        $categoriesModel = new Categories();
        $response = $categoriesModel->getAllCategories();

        require_once 'view/dashboard/header.php';
        require_once 'view/dashboard/categories.php';
        require_once 'view/dashboard/modal.php';
        require_once 'view/dashboard/footer.php';
    }

    public function createCategory() {
        $categoriesModel = new Categories();
        $response = $categoriesModel->addCategory($_POST);

        // $data = $_POST;
        // header('Content-Type: application/json');
        // echo json_encode($data);
    }

    public function deleteCategory() {
        $categoriesModel = new Categories();

        $data = $_POST;
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function port() {
        $portsModel = new Ports();
        $response = $portsModel->getAllPort();

        require_once 'view/dashboard/header.php';
        require_once 'view/dashboard/ports.php';
        require_once 'view/dashboard/modal.php';
        require_once 'view/dashboard/footer.php';
    }

    public function createPort() {
        $portsModel = new Ports();
        $response = $portsModel->addPort($_POST);

        // header('Content-Type: application/json');
        // $myJSON = json_encode(array("John", "Sally"));
        // echo $myJSON;
    }

    public function deletePort() {
        $portsModel = new Ports();

        $data = $_POST;
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}