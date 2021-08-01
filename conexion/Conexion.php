<?php

class Conexion
{
    protected $servername="localhost";
    protected $usuario="mylegacy_legacyV";
    protected $password="secretpasslegacy";
    protected $bd="mylegacy_homepage";

    protected function connect() {
       $conn = new mysqli($servername, $username, $password, $dbname);
       return $conn;
    }
    protected function disconnect($conn) {
        $conn->close();
    }
}