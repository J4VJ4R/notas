<?php

namespace Vidamrr\Notas\lib;

class Database{
    public function __construct()
    {
        
        // Datos de conexión
        $host = "172.17.0.2";
        $username = "root";
        $password = "123";
        $dbname = "notas";
        // Crear conexión
        $conn = mysqli_connect($host, $username, $password, $dbname);
        
        // Verificar conexión
        if (!$conn) {
            die("Conexión fallida: " . mysqli_connect_error());
        }
        echo "Conexión exitosa";
    }

}
