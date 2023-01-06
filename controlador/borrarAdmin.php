<?php
declare(strict_types=1);
error_reporting(E_ALL);

# session
if (session_status() != 2) session_start();

# require
require_once '../config.php';
require_once UP . INCLUDES . 'requireControlador.php';

# declaracion
$user = $pass = "";
$nivel = 0; $acceso = 1;
$database = array();
$idBorrar = "";

# borrado de usuario
borrarUsuario();

# cierre de sesion
session_write_close();

header('location:' . UP . VISTA_ADMIN . 'admin.php');

