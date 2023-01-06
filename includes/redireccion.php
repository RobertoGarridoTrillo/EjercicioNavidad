<?php

function redireccion(){

    global $user, $nivel, $ultimoNivel;

    if ($user != "" && !empty($nivel) && $ultimoNivel == false) {

        foreach (NIVEL_PATH as $key => $value) {

            if ($nivel == $key) {

                guardarSesion();

                session_write_close();
                header("location:" . $value);
                die();
            }
        }
    } else {
        $_SESSION['user'] = "";
        $_SESSION['nivel'] = 0;
        $_SESSION['id'] = 0;
        $_SESSION['ultimoNivel'] = true;
    }
}