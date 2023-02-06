<?php

namespace Vidamrr\Notas\lib;

class Database{
    private string $host;
    private string $username;
    private string $password;
    private string $dbname;
    public function __construct()
    {
        
        // Datos de conexión
        $this->host = "172.17.0.2";
        $this->username = "root";
        $this->password = "123";
        $this->dbname = "notas";
        // Crear conexión
    }
    
    public function connect(){
        $conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
        
        // Verificar conexión
        if (!$conn) {
            die("Conexión fallida: " . mysqli_connect_error());
        }
        echo "Conexión exitosa";
    }

}
