<?php
try {
$fp = fopen("./file.json","w+");
$dir = scandir("../expertise_imagenes_2");
fwrite($fp,"{");
foreach ($dir as $item) {
  if(strpos($item,"jpg")) {
    $hash = hash_file("sha256","../expertise_imagenes_2/".$item);
    $string = '"'.$hash.'":"'.trim(substr($item,0,-4)).'",';
    fwrite($fp,$string);
    rename("../expertise_imagenes_2/".$item,"../expertise_imagenes_2/".$hash.".jpg");
  }
}
fwrite($fp,"}");
fclose($fp);
} catch (Exception $e) {
echo "Error";    
}
?>