<?php
class Database {
    protected $conn;

    public function __construct() {
        global $config;
        $this->conn = new mysqli(
            $config['host'],
            $config['username'],
            $config['password'],
            $config['db_name']
        );

        if ($this->conn->connect_error) {
            die("Koneksi gagal");
        }
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }
}
