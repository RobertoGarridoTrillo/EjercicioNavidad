<?php

function guardarSesion(): void
{
    global $database, $user, $ultimoNivel, $nivel, $id;

    $_SESSION['user'] = $user;
    $_SESSION['nivel'] = $nivel;
    $_SESSION['id'] = $id;
//    $_SESSION['ultimoNivel'] = $ultimoNivel;
    $_SESSION['database'] = serialize($database);
}