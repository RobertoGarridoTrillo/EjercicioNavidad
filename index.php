<?php declare(strict_types=1);
error_reporting(E_ALL);

# session
if (session_status() != 2) session_start();

# require
require_once 'config.php';
require_once INCLUDES . "requireIndex.php";

# declaracion
$dec = array();
$user = $pass = "";
$nivel = $id = $ultimoNivel = 0;
$database = isset($_SESSION['database']) ?
    unserialize($_SESSION['database']) : new Database();

# title y h1
$title = "Ejercicio navidad";

# recoger sesion
recogerSesion();

# si existe usuario y nivel redirijo a su pagina
redireccion();

# creacion reyes
crearReyes();

# creacion regalos
crearRegalos();

# guardado sesion
guardarSesion();

# cierre de sesion
session_write_close();

header("location:" . VISTA_LOGIN . "login.php");


