<?php
include_once '../db-connection/connection.php';
include_once '../models/Zaidejas.php';

class ZaidejasController {
    private $zaidejas;

    public function __construct($db) {
        $this->zaidejas = new Zaidejas($db);
    }

    public function index() {
        $result = $this->zaidejas->read();
        $zaidejai = $result->fetch_all(MYSQLI_ASSOC);
        include '../views/zaidejai/index.php';
    }
}

// Initialize the controller and call the method
$db = new mysqli("localhost", "root", "", "krepsiniostatistika");
$controller = new ZaidejasController($db);
$controller->index();
?>
