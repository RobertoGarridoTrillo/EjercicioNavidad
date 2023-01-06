<?php

function crearRegalos()
{
    global $database;

    # primero compruebo si los regalos no estan creados
    if ($database->getIdRegalo() == 0) {


        foreach (REGALOS as $value) {

            $nombre = test_input($value['nombre']);
            $tipo = test_input($value['tipo'] ?? "");
            $fichero = test_input($value['fichero']);
            $database->setStockRegalo(
                new Regalo(
                    $nombre,
                    $tipo,
                    $fichero),
            );
        }
    }
}
