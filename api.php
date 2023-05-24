<?php 
    header("Content-Type: application/json; charset:UTF-8");
    $_DATA = json_decode(file_get_contents("php://input"), true);

    $METHOD = $_SERVER["REQUEST_METHOD"];

    echo  json_encode($METHOD, JSON_PRETTY_PRINT);
?>