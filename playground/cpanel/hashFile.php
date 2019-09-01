<?php
try {
$fp = fopen("./file.json","w+");
$dir = scandir("../expertise_imagenes");
fwrite($fp,"{");
foreach ($dir as $item) {
  if(strpos($item,"jpg")) {
    $hash = hash_file("sha256","../expertise_imagenes/".$item);
    $string = '"'.$hash.'":"'.trim(substr($item,0,-4)).'",';
    fwrite($fp,$string);
    rename("../expertise_imagenes/".$item,"../expertise_imagenes/".$hash.".jpg");
  }
}
fwrite($fp,"}");
fclose($fp);
} catch (Exception $e) {
echo "Error";    
}
?>