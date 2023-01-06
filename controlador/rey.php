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
$acceso = NIVEL['rey'];
$database = array();


# recoger sesion
$user = $_SESSION['user'] ?? "";
$nivel = $_SESSION['nivel'] ?? 0;
$id = $_SESSION['id'] ?? 0;

# controlamos que tenga nivel de acceso
controlAccessoControlador();

# lectura de url
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $user = $_REQUEST['user'] ?? "";
    $pass = $_REQUEST['pass'] ?? "";
    $nombre = $_REQUEST['name'] ?? "";
    $lock = $_REQUEST['lock'] ?? "";

    # controlamos que venga del form
    if ($lock != 1) {
        session_write_close();
        header("location:" . UP . "index.php");
        die();
    }

    # recogemos los usuarios
    $database = unserialize($_SESSION['database']);

    # saneamos las entradas
    $user = test_input($user);
    $pass = test_input($pass);
    $nombre = test_input($nombre);


    # extraemos los usuarios para validaciones
    $usuarios = $database->getUsuarios();

    # comprobamos que no se repite la familia con ningun usuario
    for ($i = 0; $i < count($usuarios); $i++) {

        if ($usuarios[$i]->getUser() == $user) $error = 2;

    }

    if ($error != 0) $_SESSION['error'] = $error;

    # creamos familia
    if ($error == 0) {
        $database->setUsuario(
            new Usuario(
                $user,
                $pass,
                NIVEL['familia']),
            new Familia(
                $nombre)
        );

    }

    # guardamos usuarios
    $_SESSION['database'] = serialize($database);
}

# cierre de sesion
session_write_close();

header('location:' . UP . VISTA_REY . 'rey.php');

