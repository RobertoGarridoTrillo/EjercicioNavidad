<?php
$size = count($listaRegalos);

for ($i = $size - 1; $i >= 0; $i--) {
    if ($listaRegalos[$i] == "") {
        unset($listaRegalos[$i]);
        array_values($listaRegalos);
    }
}

# lo pongo en un string separados por comas
$lista = implode(",", $listaRegalos);

# guardo en un input hidden la lista de regalos ya pedidos para mostrarla en js
echo <<<EOF
<input type="hidden" id="listaRegalos" 
    data-id="{$id}" 
    data-lista ="{$lista},"
 ></input>
EOF;