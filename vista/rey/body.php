<form action="<?= UP2 . CONTROLADOR ?>rey.php" method="get">
    <fieldset class="fieldset">
        <legend>Añadir familia</legend>
        <?php include_once UP2 . INCLUDES . 'inputUsuario.php' ?>
        <?php include_once UP2 . INCLUDES . 'inputPass.php' ?>
        <?php include_once UP2 . INCLUDES . 'inputNombre.php' ?>
        <?php include_once UP2 . INCLUDES . 'inputEnviar.php' ?>
        <?php include_once UP2 . INCLUDES . 'inputOculto.php' ?>
    </fieldset>
</form>


<!-- comprueba si hay error en datos de login -->
<?php include_once UP2 . INCLUDES . 'inputError.php' ?>

<table id="tableRey" class="table table-responsive table-hover table-bordered table-condensed overflow">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>Pass</th>
        <th>Niño</th>
        <th>Acción</th>
    </tr>

    <?php

    # extraigo los datos de database
    $usuarios = $database->getUsuarios();
    $tipos = $database->getTipos();

    include_once UP2 . INCLUDES . 'mostrarTablaFamilia.php'

    ?>
</table>
</div>
</div>
</div>