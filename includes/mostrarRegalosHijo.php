<?php

if ($idNinoTemp != 0) {

    $listaRegalos = $tipos[$idNinoTemp - 1]->getListaRegalos();

    include_once UP2 . INCLUDES . 'modalFamilia.php' ?>


    <div class="divRegalos" id="tableNinoFamilia">
        <span class="spanRegalos">Regalos</span>
    </div>

    <table class="table table-responsive table-hover table-bordered table-condensed overflow">

        <?php

        echo <<<EOF

        <tbody>
        <tr><th>Id</th> <th>Nombre</th> <th>imagen</th> <th>Ver ficha</th></tr>
        EOF;

        for ($j = 0; $j < count($listaRegalos); $j++) {

        $idRegalo = $listaRegalos[$j];


        for ($i = 0; $i < count($stockRegalos); $i++) {
            if ($stockRegalos[$i]->getId() == $idRegalo) {

                $iconoSearch = UP2 . IMAGES_ICONOS . "search-plus.png";
                $imagen = UP2 . IMAGES_JUEGOS . $stockRegalos[$i]->getFichero();

                echo <<<EOF
                    <tr id="tr{$stockRegalos[$i]->getId()}"> 
                    <td class="padreSpan"><span>{$stockRegalos[$i]->getId()}</span></td>
                    <td class="padreSpan"><span>{$stockRegalos[$i]->getNombre()}</span></td>
                    <td class="padreImagen">
                        <img src="{$imagen}" alt="" class="hijoImagen img-responsive imagenRegalos">
                    </td>
                    <td class="padreIcono">
                        <a href="" data-toggle="modal" data-target="#myModal{$i}">
                            <img class="iconoAccion" src="{$iconoSearch}"></img>
                        </a>
                    </td>
                </tr>
            EOF;
            }

        }
        ?></tbody><?php
        }
        ?>
    </table>
<?php }