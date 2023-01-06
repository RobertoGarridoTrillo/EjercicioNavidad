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