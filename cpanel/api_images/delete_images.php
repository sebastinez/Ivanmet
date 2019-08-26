<?php

$file = "../../expertise_imagenes/". $_GET["hash"].".jpg";

$bool = unlink($file);

try {
    $json = file_get_contents("../file.json");
    $json_data = json_decode($json,true);
    unset($json_data[$_GET["hash"]]);  
    $jsonEncoded = json_encode($json_data);
    file_put_contents("../file.json",$jsonEncoded);
    header("Location: ../index.php?page=images");
    die();
} catch(Exception $e) {
echo $e;
}
?>
