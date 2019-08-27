<?php

function readImageJSON() {
    return json_decode(file_get_contents("../file.json"),true);
}

function writeImageJSON($data) {
    file_put_contents("../file.json", json_encode($data));
}

function uploadFile() {
    $target_dir = "../../expertise_imagenes/";
    $hash = hash_file("sha256",$_FILES["image"]["tmp_name"]);
    $target_file = $target_dir . basename($hash.".jpg");
   
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if(isset($_POST["edit"])) {
    $json = readImageJSON();
    $json[$_POST["hash"]] = $_POST["titulo"]; 
    writeImageJSON($json);   
}

if(isset($_POST["add"])) {

}

header("Location: ../index.php?page=images");
die();

?>