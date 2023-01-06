<form action="<?= UP2 . CONTROLADOR ?>login.php" method="get">
    <fieldset class="fieldset">
        <legend>Acceso</legend>
        <div class="input-group undefined ig-dark">
            <input
                    class="ig-text"
                    id="accessKey"
                    name="user"
                    type="text"
                    spellcheck="false"
                    required=""
                    value=""
                    autocomplete="off"
                    onfocus="clearError();"
            >
            <i class="ig-helpers"></i>
            <label class="ig-label">Usuario</label>
        </div>
        <div class="input-group undefined ig-dark">
            <input
                    class="ig-text"
                    id="secretKey"
                    name="pass"
                    type="password"
                    spellcheck="false"
                    required=""
                    value=""
                    autocomplete="off"
                    onfocus="clearError();"
            >
            <i class="ig-helpers"></i>
            <label class="ig-label">Contraseña</label>
        </div>
        <input type="hidden" name="lock" value="1">
        <button class="lw-btn" type="submit">
            <i class="fas fa-sign-in-alt"></i>
        </button>
    </fieldset>
</form>

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


