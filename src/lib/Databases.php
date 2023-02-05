<?php

namespace Vidamrr\Notas\lib;

use mysqli;
use PDO;
use PDOException;

class DBConnection
{
    private $host = "localhost";
    private $username = "xavi_ubuntu";
    private $password = 123;
    private $dbname = "notas";
    private $conn;

    public function __construct()
    {
        try {
            // Crea la conexión a la base de datos
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            // Establece el modo de error para que lance excepciones
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa";
        } catch(PDOException $e) {
            echo "Conexión fallida: " . $e->getMessage();
        }
    }

    public function closeConnection()
    {
        // Cierra la conexión
        $this->conn = null;
    }
}

$db = new DBConnection();
$db->closeConnection();


