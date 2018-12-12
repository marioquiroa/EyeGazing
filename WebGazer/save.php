<?php
    error_reporting(E_ALL);
    $data = $_POST['something']; // the key we sent was "something"
    $f = fopen('file.json', 'w+');
    fwrite($f, $data);
    fclose($f);
?>