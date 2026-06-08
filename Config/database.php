<?php

class Database {
    protected $con;
    
    public function __construct() {
        // Configura tus datos de conexión aquí
        $this->con = new mysqli('localhost', 'root', '', 'banco_db');
        
        // Verifica la conexión
        if ($this->con->connect_error) {
            die("Error de conexión: " . $this->con->connect_error);
        }
    }
    
    // Obtiene un usuario por su usuario y contraseña
    /*
    public function getUsuario($usuario, $password) {
        $query = $this->con->query(
            "SELECT id, usuario, nombre FROM usuarios WHERE usuario='$usuario' AND password='$password'"
        );
        
        if ($query && $query->num_rows > 0) {
            return $query->fetch_assoc();
        }
        return null;
    }
    
    // Obtiene la conexión
    public function getConexion() {
        return $this->con;
    }
    //*/
}

?>