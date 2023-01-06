<?php
for ($j = 0; $j < count(TIPOS_REGALO); $j++) {

    $tipoRegalo = TIPOS_REGALO[$j];

    echo <<<EOF
                <tbody>        
                    <tr class="clickable" id="tbody{$j}" data-toggle="collapse" data-target="#group-of-rows-{$j}" onclick="collapse('tbody{$j}')">
                        <td colspan="6">
                            <i class="fa fa-plus" aria-hidden="true"> {$tipoRegalo}
                        </td>
                    </tr>
                </tbody>
                <tbody id="group-of-rows-{$j}" class="collapse">
                <tr><th>Id</th><th>Nombre</th><th>imagen</th><th>Ver ficha</th><th>Añadir</th></tr>
            EOF;

    for ($i = 0; $i < count($stockRegalos); $i++) {
        if ($stockRegalos[$i]->getTipo() == TIPOS_REGALO[$j]) {

            $iconoSearch = UP2 . IMAGES_ICONOS . "search-plus.png";
            $conducta = $tipos[$id - 1]->isBueno() ? 1 : 0;
            $imagen = UP2 . IMAGES_JUEGOS . $stockRegalos[$i]->getFichero();
            $checked = in_array($i + 1, $listaRegalos) ? "checked" : "";
            $iplus = $i + 1;

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
                    <td class="padreSpan">
                        <input type="checkbox" id="{$iplus}" {$checked}
                            onchange="contarRegalos({$stockRegalos[$i]->getId()}, {$conducta})">
                    </td>                        
                </tr>
            EOF;
        }
    }
}