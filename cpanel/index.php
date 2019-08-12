<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php

$dir = scandir("../expertise_imagenes");

foreach ($dir as $item) {
  if($item !== "..") {
echo "<div><img src='../expertise_imagenes/".$item."' height='100px'><p>".trim(explode(".",$item)[0])."</p></div>";
}
}


 ?>


<?php

try {
$json = file_get_contents("../localization/expertise.json");

$json_data = json_decode($json,true)["expertise"];

foreach ($json_data as $key => $value) {
  echo "<p>".$value["en"]."<br>".$value["es"]."</p>";
}


} catch(Exception $e) {
  echo $e;
}
 ?>

 <?php

 $dir = scandir("../logos-clientes");

 foreach ($dir as $item) {
   if($item !== "..") {
 echo "<div><img src='../logos-clientes/".$item."' width='100px'><p>".trim(explode(".",$item)[0])."</p></div>";
 }
 }

  ?>


 </body>
 </html>
