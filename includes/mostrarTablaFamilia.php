<?php
for ($i = 0; $i < count($tipos); $i++) {

    if ($tipos[$i] instanceof Familia) {

        $path = UP2 . CONTROLADOR;

        $idNino = $tipos[$i]->getIdNino();

        $nombreNino = $idNino != 0 ? $tipos[$idNino - 1]->getNombre() : "";

        echo <<<EOF
            <tr>
                <td>{$tipos[$i]->getId()}</td>
                <td>{$tipos[$i]->getNombre()}</td>
                <td>{$usuarios[$i]->getUser()}</td>
                <td>{$usuarios[$i]->getPass()}</td>
                <td>{$nombreNino}</td>
                <td>
                    <a class="" 
                        href="{$path}borrarFamilia.php?id={$tipos[$i]->getId()}" ">
                    <i class="far fa-trash-alt"></i>
                    </a>
                 </td>
            </tr>
        EOF;
    }
}