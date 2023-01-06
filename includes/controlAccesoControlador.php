<?php

function controlAccessoControlador()
{
    global $nivel, $acceso;

    # controlamos que tenga nivel de acceso
    if ($nivel != $acceso) {
        session_write_close();
        header('location:' . UP . "index.php");
        die();
    }
}
