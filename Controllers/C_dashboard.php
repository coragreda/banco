<?php

session_start();

if (!isset($_SESSION['usuario_id'])) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit();
}

$nombre_usuario = $_SESSION['usuario_nombre'];

require_once('Views/V_dashboard.php');
?>