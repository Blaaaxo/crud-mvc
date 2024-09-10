<?php
    require_once "autoload.php";
    require_once "./config/app.php";

    if (isset($_GET['views'])){
        $url=explode("/", $_GET['views']);
    } else {
        $url=["login"];
    }

?>