<?php
class Conexion {
    private $conexion;
    private string $dbhost = 'localhost';
    private string $user = 'root';
    private string $password = '';
    private string $dbname = 'restaurant';

    public function __construct() {
            $this->conexion = new mysqli($this->dbhost,  $this->user, $this->password,$this->dbname);
            if ($this->conexion->connect_error) {
                echo "Error de conexión ($this->conexion->connect_error) $this->conexion->connect_error";
            }
    }
    public function getConexion() {
        return $this->conexion;
    }
}

