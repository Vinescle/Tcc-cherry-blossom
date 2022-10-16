<?php

if (empty($_SESSION['id_usuario']) && empty($_SESSION['logado'])) {
    header("Location: $rota/login.php");
}
