<form action="<?= UP2 . CONTROLADOR ?>familia.php" method="get">
    <fieldset class="fieldset">
        <legend>Añadir niño</legend>
        <?php include_once UP2 . INCLUDES . 'inputUsuario.php' ?>
        <?php include_once UP2 . INCLUDES . 'inputPass.php' ?>
        <?php include_once UP2 . INCLUDES . 'inputNombre.php' ?>
        <?php include_once UP2 . INCLUDES . 'inputConducta.php' ?>
        <?php include_once UP2 . INCLUDES . 'inputEnviar.php' ?>
        <?php include_once UP2 . INCLUDES . 'inputOculto.php' ?>
    </fieldset>
</form>

<!-- comprueba si hay error en datos de login -->
<?php include_once UP2 . INCLUDES . 'inputError.php' ?>

<table id="tableFamilia" class="table table-responsive table-hover table-bordered table-condensed overflow">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>Pass</th>
        <th>Conducta</th>
        <th>Regalos</th>
        <th>Acción</th>
    </tr>

    <?php

    # extraigo los datos de database
    $stockRegalos = $database->getStockRegalos();
    $usuarios = $database->getUsuarios();
    $tipos = $database->getTipos();

    $idNinoTemp = $tipos[$id - 1]->getIdNino();

    include_once UP2 . INCLUDES . 'mostrarTablaHijo.php'
    ?>

</table>

<?php for ($i = 0;$i<8;$i++) {?><br><?php }

include_once UP2 . INCLUDES . 'mostrarRegalosHijo.php';

?>

</div>
</div>
</div>