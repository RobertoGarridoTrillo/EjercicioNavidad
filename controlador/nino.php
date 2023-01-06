<?php declare(strict_types=1);
error_reporting(E_ALL);

# session
if (session_status() != 2) session_start();

# require
require_once '../config.php';
require_once UP . INCLUDES . 'requireControlador.php';

# declaracion
$user = $pass = $nombre = "";
$nivel = $error = $id = 0;
$acceso = NIVEL['nino'];
$database = $regalos = array();

# recoger sesion
$user = $_SESSION['user'] ?? "";
$nivel = $_SESSION['nivel'] ?? 0;
$id = $_SESSION['id'] ?? 0;
$regalos = $_SESSION['regalos'] ?? array();

# controlamos que tenga nivel de acceso
controlAccessoControlador();

# lectura de url
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $id = (int)$_REQUEST['id'] ?? "";

    for ($i = 0; $i < REGALOS_MAXIMOS; $i++) {
        $txt = $_REQUEST["r" . $i] ?? "";
        if (!$txt) break;
        $regalos[$i] = $txt;
    }

    # recogemos los usuarios
    $database = unserialize($_SESSION['database']);


    # incluimos el array de regalos en nino
    if ($error == 0) $database->getTipo($id - 1)->setListaRegalos($regalos);


    # guardamos usuarios
    $_SESSION['database'] = serialize($database);
}

# cierre de sesion
session_write_close();

header('location:' . UP . VISTA_NINO . 'nino.php');

