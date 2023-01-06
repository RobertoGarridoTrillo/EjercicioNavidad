<?php

for ($i = 0; $i < count($stockRegalos); $i++) {

    $imagen = UP2 . IMAGES_JUEGOS . $stockRegalos[$i]->getFichero();
    $descripcion = DESCRIPCION[0];

    echo <<<EOF
    <!-- Modal -->
        <div id="myModal{$i}" class="modal fade" role="dialog">
            <div class="modal-dialog">
                        
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">x</button>
                        <h4 class="modal-title">{$stockRegalos[$i]->getNombre()}</h4>
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
