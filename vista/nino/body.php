<br><br>
<div class="divRegalos">
    <span class="spanRegalos">Añadir regalos</span>
</div>

<?php

# extraigo los datos de database
$stockRegalos = $database->getStockRegalos();
$usuarios = $database->getUsuarios();
$tipos = $database->getTipos();
$listaRegalos = $tipos[$id - 1]->getListaRegalos();

# preparo los datos de los regalos guardados
include_once UP2 . INCLUDES . "prepararListaRegalosNino.php";

# primero pongo las ventanas modales
include_once UP2 . INCLUDES . "modalesNino.php";

?>

<table id="tableRegalos" class="table table-responsive table-hover table-bordered table-condensed overflow">

    <?php include_once UP2 . INCLUDES . "mostrarStockRegalos.php"; ?>

</table>

<br><br>

<div id="divResultados">

</div>

<!-- comprueba si hay error en datos de login -->
<?php include_once UP2 . INCLUDES . 'inputError.php' ?>

</div>


</div>
</div>
</div>
