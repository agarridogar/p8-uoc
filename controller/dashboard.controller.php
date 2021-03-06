<?php
require_once 'model/model_ports.php';
require_once 'model/model_categories.php';
require_once 'model/model_boats.php';

class DashboardController  {
    private function checkSession() {
        session_start();
        if($_SESSION["token"] != 'Y29udHJhc2XxYXVsdHJhc2VndXJh') {
            header('Location: ?c=dashboard', true);
        }
    }

    public function Index() {
        session_start();
        if($_SESSION["token"] == 'Y29udHJhc2XxYXVsdHJhc2VndXJh') {
            header('Location: ?c=dashboard&a=boat', true);
        }

        if($_POST['user'] == 'sergio' && $_POST['pwd'] == 'sunset') {
            $_SESSION["token"] = 'Y29udHJhc2XxYXVsdHJhc2VndXJh';
            header('Location: ?c=dashboard&a=boat', true);
        }
        require_once 'view/dashboard/login.php';
    }

    public function logout() {
        session_start();
        session_destroy();
    }

    public function boat() {
        $this->checkSession();
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

        if ($response !== "Transition OK") {
            http_response_code(500);
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function deleteBoat() {
        $boatsModel = new Boats();
        $response = $boatsModel->deleteBoat($_POST['id']);

        if ($response !== "Transition OK") {
            http_response_code(500);
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function category() {
        $this->checkSession();
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

        if ($response !== "Transition OK") {
            http_response_code(500);
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function deleteCategory() {
        $categoriesModel = new Categories();
        $response = $categoriesModel->deleteCategory($_POST['id']);

        if ($response !== "Transition OK") {
            http_response_code(500);
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function port() {
        $this->checkSession();
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

        if ($response !== "Transition OK") {
            http_response_code(500);
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function deletePort() {
        $portsModel = new Ports();
        $response = $portsModel->deletePort($_POST['id']);

        if ($response !== "Transition OK") {
            http_response_code(500);
        }

        header('Content-Type: application/json');
        echo json_encode($response);

    }
}