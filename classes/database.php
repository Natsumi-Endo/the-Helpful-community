<?php
class Database {

    private $server_name = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "helpful_community";
    protected $conn;
    
    public function __construct() {
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);

        if ($this->conn->connect_error) {
            die ("Connection failed: " . $this->conn->connect_error);
        }
    }  
}

?>