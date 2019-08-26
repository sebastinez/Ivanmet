<?php
 $target_dir = "../../expertise_imagenes/";
$target_file = $target_dir . basename(hash_file("sha256",$_FILES["image"]["tmp_name"]).".jpg");
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

?>