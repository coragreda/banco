<?php

require_once('Models/Conexion.php');

$usuario_encontrado = null;
$error_mensaje = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (empty($usuario) || empty($password)) {
        $error_mensaje = "Por favor completa todos los campos";
    } else {
        $conexion = new Conexion();
        $usuario_encontrado = $conexion->getUsuario($usuario, $password);
        
        if ($usuario_encontrado) {
            $_SESSION['usuario_id'] = $usuario_encontrado['id'];
            $_SESSION['usuario_nombre'] = $usuario_encontrado['nombre'];
            $_SESSION['usuario'] = $usuario_encontrado['usuario'];
            
            header('Location: dashboard.php');
            exit();
        } else {
            $error_mensaje = "Usuario o contraseña incorrectos";
        }
    }
}

require_once('Views/V_login.php');

?>