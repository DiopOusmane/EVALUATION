<?php
    require_once(__DIR__ . "/config/db.php");
    require_once(__DIR__ . "/config/function.php");
    session_start();
    require_once(__DIR__ . "/config/router.php");
    var_dump($_GET);
    var_dump($_SESSION['role'])
?>