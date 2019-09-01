<?php

if (isset($_POST["add"])) {
    $hash = uploadFile();
    echo $hash;
    $json = readImageJSON();
    $json[$hash] = $_POST["titulo"];
    writeImageJSON($json);
}

if (isset($_POST["delete"])) {
    deleteFile($_POST["hash"] . ".jpg");
    $json = readImageJSON();
    unset($json[$_POST["hash"]]);
    writeImageJSON($json);
}

header("Location: ../index.php?page=clientes");
die();

function readImageJSON()
{
    return json_decode(file_get_contents("../../db/clientes.json"), true);
}

function writeImageJSON($data)
{
    file_put_contents("../../db/clientes.json", json_encode($data));
}

function deleteFile($fileString)
{
    $file = "../../logos-clientes/" . $fileString;
    $bool = unlink($file);
}

function uploadFile()
{
    $target_dir = "../../logos-clientes/";
    $hash = hash_file("sha256", $_FILES["archivo"]["tmp_name"]);
    $target_file = $target_dir . basename($hash . ".jpg");

    if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file)) {
        return $hash;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
