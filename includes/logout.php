<?php declare(strict_types=1);
error_reporting(E_ALL);

# session
if (session_status() != 2) session_start();

# require
require_once '../config.php';
require_once UP . INCLUDES . 'requireControlador.php';

# declaracion
$user = $pass = "";
$nivel = 0;
$error = 0;

# recoger sesion
$user = $_SESSION['user'] ?? "";
$nivel = $_SESSION['nivel'] ?? 0;

if ($nivel >= NIVEL['admin'] && $nivel <= count(NIVEL)) {

    session_destroy();

    setcookie('user', "", time() - 3600, '/');
    setcookie('nivel', "", time() - 3600, '/');
}
session_write_close();
header("location:" . UP . "index.php");
die();
