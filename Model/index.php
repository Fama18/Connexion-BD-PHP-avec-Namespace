<?php
    require_once '../Config/autoload.php';
    use Controller\RolesController;
    $rolesdb = new RolesController();
    $rolesdb->add();
?>
