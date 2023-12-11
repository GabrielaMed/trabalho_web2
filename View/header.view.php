<?php
if (!isset($_SESSION['dados_usuario'])){
    require('./../View/login.view.php');
    exit();
}
?>