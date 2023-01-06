<?php declare(strict_types=1);
error_reporting(E_ALL);

# session
if (session_status() != 2) session_start();

# require
require_once '../../config.php';
require_once UP2 . INCLUDES . "requireVista.php";

# declaracion
$user = "";
$nivel = $id = $error = 0; $acceso = NIVEL['nino'];

# para cuando pulse home
$_SESSION['ultimoNivel'] = isset($_SESSION['ultimoNivel']);

# recoger sesion
recogerSesion();

# controlamos que tenga nivel de acceso
controlAccessoVista();

# recoge usuarios
$database = unserialize($_SESSION['database']);

# Title y H1
$title = "Niño " . $database->getTipo($id - 1)->getNombre();

# header
require_once UP2 . VISTA_NINO . HEADER;
# nav-bar
require_once UP2 . VISTA_NINO . NAV;
# body
require_once UP2 . VISTA_NINO . BODY;
# footer
require_once UP2 . VISTA_NINO . FOOTER;


# cierre de sesion
session_write_close();