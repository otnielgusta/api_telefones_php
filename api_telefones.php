<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

    $telefones = file_get_contents('telefones.json');
    $data = json_decode($telefones);

    echo(json_encode($data));
?>