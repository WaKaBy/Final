<?php
class Zaidejas {
    private $conn;
    private $table = "zaidejai";

    public $id;
    public $vardas;
    public $pavarde;
    public $gimimo_data;
    public $aukstis;
    public $svoris;
    public $komandos_id;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>
