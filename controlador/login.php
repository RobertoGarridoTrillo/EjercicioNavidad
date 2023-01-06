<?php declare(strict_types=1);
error_reporting(E_ALL);

# session
if (session_status() != 2) session_start();

# require
require_once '../config.php';
require_once UP . INCLUDES . 'requireControlador.php';

# declaracion
$user = $pass = "";
$nivel = $error = $id = 0;
$database = array();

# recoger sesion
$user = $_SESSION['user'] ?? "";
$nivel = $_SESSION['nivel'] ?? 0;

# lectura de url
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $user = $_REQUEST['user'] ?? "";
    $pass = $_REQUEST['pass'] ?? "";
    $lock = $_REQUEST['lock'] ?? "";

    # controlamos que venga del login
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

    foreach ($database->getUsuarios() as $usuario) {

        if ($usuario->getUser() == $user && $usuario->getPass() == $pass) {

            $nivel = $usuario->getNivel();

            foreach (NIVEL_PATH as $key => $value) {

                if ($nivel == $key) {

                    # escribimos sesion y cookies
                    $_SESSION['user'] = $user;
                    $_SESSION['nivel'] = $nivel;
                    $_SESSION['id'] = $usuario->getId();

                    setcookie('user', $user, time() + 60 * 10, '/');
                    setcookie('id', (string)$usuario->getId(), time() + 60 * 10, '/');
                    setcookie('nivel', (string)$nivel, time() + 60 * 10, '/');

                    session_write_close();
                    header("location:" . UP . $value);
                    die();

                }
            }
        }

    }
    $_SESSION['error'] = 1;
}
# cierre de sesion
session_write_close();

header('location:' . UP . VISTA_LOGIN . 'login.php');

