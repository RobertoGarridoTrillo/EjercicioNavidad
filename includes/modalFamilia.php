<?php

for ($i = 0; $i < count($listaRegalos); $i++) {

    $idRegalo = $listaRegalos[$i] - 1;
    $descripcion = DESCRIPCION[0];

    $imagen = UP2 . IMAGES_JUEGOS . $stockRegalos[$idRegalo]->getFichero();

    echo <<<EOF
        <!-- Modal -->
        <div id="myModal{$idRegalo}" class="modal fade" role="dialog">
            <div class="modal-dialog">
                        
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">x</button>
                        <h4 class="modal-title">{$stockRegalos[$idRegalo]->getNombre()}</h4>
                    </div>
                    <div class="modal-body">
                        <p>{$descripcion}</p>
                        <img src="{$imagen}" alt="" class="hijo img-responsive imagenRegalos">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        EOF;
}