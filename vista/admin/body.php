<br>
<table id="" class="
            table
            table-responsive
            table-hover
            table-bordered
            table-condensed
            overflow">
    <tr>
        <th>Id</th>
        <th>Tipo</th>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>Pass</th>
        <th>Familia</th>
        <th>Hijo</th>
        <th>Conducta</th>
        <th>Regalos</th>
        <th>Acción</th>
    </tr>

    <?php
    $usuarios = $database->getUsuarios();
    $tipos = $database->getTipos();

    for ($i = 0; $i < count($tipos); $i++) {

        # declaracion
        $path = UP2 . CONTROLADOR;
        $tipo = get_class($tipos[$i]);
        $conducta = $nombreFamilia = $nombreNino = $regalos = "";


        # si es del tipo niño
        if ($tipos[$i] instanceof Nino) {

            #nombre de la familia
            $idFamilia = $tipos[$i]->getIdFamilia();
            $nombreFamilia = $tipos[$idFamilia - 1]->getNombre();

            #numero de regalos
            $regalos = count($tipos[$i]->getListaRegalos());

            # conducta
            $conducta = $tipos[$i]->isBueno() ? 'bueno' : 'malo';

        }

        # si es del tipo familia
        if ($tipos[$i] instanceof Familia) {

            # nombre del niño
            $idNino = $tipos[$i]->getIdNino();
            $nombreNino = $idNino > 0 ? $tipos[$idNino - 1]->getNombre() : "";

        }

        echo <<<EOF
                        <tr>
                            <td>{$tipos[$i]->getId()}</td>
                            <td>{$tipo}</td>
                            <td>{$tipos[$i]->getNombre()}</td>
                            <td>{$usuarios[$i]->getUser()}</td>
                            <td>{$usuarios[$i]->getPass()}</td>
                            <td>{$nombreFamilia}</td>                    
                            <td>{$nombreNino}</td>                    
                            <td>{$conducta}</td>
                            <td>{$regalos}</td>
                            <td>
                                <a class="" 
                                    href="{$path}borrarAdmin.php?id={$tipos[$i]->getId()}" ">
                                <i class="far fa-trash-alt"></i>
                                </a>
                             </td>
                        </tr>
                        EOF;

    }
    ?>
</table>
<div id="tableAdmin">
    <!-- comprueba si hay error en datos de login -->
    <?php
    if ($error != 0) {

        $_SESSION['error'] = 0;
        ?>

        <p class="error" id="error"><?= ERROR[$error] ?></p><?php
    } else {
        ?>

        <p class="hidden" id="error"><?= ERROR[$error] ?></p><?php
    }
    ?>
</div>
</div>
</div>
</div>