<?php

function recogerSesion()
{
    global $user, $nivel, $id, $ultimoNivel, $error;

    $user = $_SESSION['user'] ?? "";
    $nivel = $_SESSION['nivel'] ?? 0;
    $id = (int)$_SESSION['id'] ?? 0;
    $ultimoNivel = (int)$_SESSION['ultimoNivel'] ?? 0;
    $error = $_SESSION['error'] ?? 0;
}
