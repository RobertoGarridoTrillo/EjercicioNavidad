<?php

function crearReyes()
{
    global $database;

    # primero compruebo si los reyes no estan creados
    if ($database->getIdUsuario() == 0) {


        foreach (KEYS as $value) {

            $nombre = test_input($value['nombre']);
            $idNino = (int)test_input($value['idNino'] ?? "");
            $idFamilia = (int)test_input($value['idFamilia'] ?? "");
            $conducta = (bool)test_input($value['conducta'] ?? true);

            $tipo = match ($value['nivel']) {
                1 => $tipo = new Admin($nombre),
                2 => $tipo = new Rey($nombre),
                3 => $tipo = new Familia($nombre, $idNino),
                4 => $tipo = new Nino($nombre, $idFamilia, $conducta)
            };

            $database->setUsuario(
                new Usuario(
                    test_input($value['user']),
                    test_input($value['pass']),
                    (int)test_input($value['nivel'])),
                $tipo
            );
        }
    }
}

