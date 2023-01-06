<?php declare(strict_types=1);
error_reporting(E_ALL);

# session
if (session_status() != 2) session_start();

# require
require_once "../../config.php";
require_once UP2 . INCLUDES . "requireVista.php";

# declaracion
$user = $pass = "";$nivel = 0;
$title = "Login";
$error = $_SESSION['error'] ?? 0;

# para cuando pulse home
$ultimoNivel = $_SESSION['ultimoNivel'] ?? false;

# compruebo si recargo y tengo usuario abierto
if ($ultimoNivel == 0) {
    session_write_close();
    header("location:" . UP2 . "index.php");
    die();
}
$_SESSION['ultimoNivel'] = 0;

# header
require_once UP2 . VISTA_LOGIN . HEADER;
# nav-bar
require_once UP2 . VISTA_LOGIN . NAV;
# body
require_once UP2 . VISTA_LOGIN . BODY;
# footer
require_once UP2 . VISTA_LOGIN . FOOTER;

# cierre de sesion
session_write_close();