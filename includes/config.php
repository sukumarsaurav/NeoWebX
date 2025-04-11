<?php
// Prevent direct access to this file
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Database {
    // Database connection parameters
    private $host = "localhost";
    private $db_name = "u911550082_startupai";
    private $username = "u911550082_startupai";
    private $password = "r9[T!LCxpD";
    public $conn;
    
    // Get database connection
    public function getConnection() {
        $this->conn = null;
        
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        
        return $this->conn;
    }
}
?>
