<?php

function showMessage($message = "", $type = "") {
    echo "<div class='alert alert-$type' role='alert'>$message</div>";
}

?>