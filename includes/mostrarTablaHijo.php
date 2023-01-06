<?php

for ($i = 0; $i < count($tipos); $i++) {

    if ($tipos[$i] instanceof Nino &&

        $idNinoTemp == $tipos[$i]->getId()) {

        $path = UP2 . CONTROLADOR;
        $regalos = count($tipos[$i]->getListaRegalos());
        $regalos = count($tipos[$i]->getListaRegalos());
        $conducta = $tipos[$i]->isBueno() ? 'bueno' : 'malo';

        echo <<<EOF
            <tr>
                <td>{$tipos[$i]->getId()}</td>
                <td>{$tipos[$i]->getNombre()}</td>
                <td>{$usuarios[$i]->getUser()}</td>
                <td>{$usuarios[$i]->getPass()}</td>
                <td>{$conducta}</td>
                <td>{$regalos}</td>
                <td>
                    <a class="" 
                        href="{$path}borrarNino.php?id={$tipos[$i]->getId()}" ">
                    <i class="far fa-trash-alt"></i>
                    </a>
                 </td>
            </tr>
        EOF;
    }
}
