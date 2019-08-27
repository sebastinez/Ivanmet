<?php

if(isset($_POST["edit"])) {
    $json = readImageJSON();
    $json[$_POST["hash"]] = $_POST["titulo"]; 
    writeImageJSON($json);   
}

if(isset($_POST["add"])) {
    $hash = uploadFile();
    echo $hash;
    $json = readImageJSON();
    $json[$hash] = $_POST["titulo"]; 
    writeImageJSON($json);
}

if(isset($_POST["delete"])) {
    deleteFile($_POST["hash"].".jpg");
    $json = readImageJSON();
    unset($json[$_POST["hash"]]);  
    writeImageJSON($json);
}

header("Location: ../index.php?page=images");
die();

function readImageJSON() {
    return json_decode(file_get_contents("../file.json"),true);
}

function writeImageJSON($data) {
    file_put_contents("../file.json", json_encode($data));
}

function deleteFile($fileString) {
$file = "../../expertise_imagenes_2/". $fileString;
$bool = unlink($file);
}
   
function uploadFile() {
    $target_dir = "../../expertise_imagenes_2/";
    $hash = hash_file("sha256",$_FILES["image"]["tmp_name"]);
    $target_file = $target_dir . basename($hash.".jpg");
   
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        return $hash;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>