<?php

function borrarUsuario()
{
    global $user, $nivel, $idBorrar, $acceso, $database;

    # recoger sesion
    $user = $_SESSION['user'] ?? "";
    $nivel = $_SESSION['nivel'] ?? 0;

    # lectura de url
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

        $idBorrar = (int)$_REQUEST['id'] ?? "";

        # controlamos que tenga nivel de acceso
        if ($nivel != $acceso) {
            session_write_close();
            header("location:" . UP . "index.php");
            die();
        }

        # recogemos los usuarios
        $database = unserialize($_SESSION['database']);

        # borramos la familia
        if ($idBorrar != "") $database->delUsuario($idBorrar);

        # guardamos usuarios
        $_SESSION['database'] = serialize($database);
    }
}