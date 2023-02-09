<?php

namespace Vidamrr\Notas\lib;

use PDO;
use PDOException;

class Database{
    private string $host;
    private string $username;
    private string $password;
    private string $dbname;
    private string $charset;
    public function __construct()
    {
        
        // Datos de conexión
        $this->host = "172.17.0.3";
        $this->username = "root";
        $this->password = "123";
        $this->dbname = "notas";
        $this->charset = "utf8mb4";

        // Crear conexión
    }
    
    public function connect(){
        try {
            //conection
            $connection = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                pdo::ATTR_EMULATE_PREPARES => false
            ];

            $pdo = new PDO($connection, $this->username, $this->password, $options);
            return $pdo;
        } catch (PDOException $th) {
            throw $th;
        }




        // $conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
        
        // // Verificar conexión
        // if (!$conn) {
        //     die("Conexión fallida: " . mysqli_connect_error());
        // }
        // echo "Conexión exitosa";
    }

}
