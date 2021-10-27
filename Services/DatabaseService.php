<?php

namespace Services;

use PDO;
use PDOException;

class DatabaseService
{
    private $host = "localhost";
    private $dbname = "T.B.D";
    private $username = "root";
    private $password = "";
    private $conn;

    public function connect(): PDO
    {
        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->conn;
        } catch (PDOException $e) {
            die("Connection failed:" . $e->getMessage()); // Returns error message
        }
    }
    public function disconnect(): void
    {
        $this->conn = null; // Closes connection
    }

}
