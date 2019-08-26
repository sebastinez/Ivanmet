<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Panel de control</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="./style.css">
  </head>
  <body>
<div class="container">
  <div class="row">
    <h1 class="text-center">Imagenes de expertise</h1>
  </div>
  <div class="row">
<?php
$dir = scandir("../expertise_imagenes");
foreach ($dir as $item) {
  if(strpos($item,"jpg")) {
?>
    <div class='card col-xs-12 col-md-6 col-lg-4'>
      <img src='../expertise_imagenes/<?php echo $item; ?>' class='card-img-top'>
      <div class="card-body">
        <h5 class="card-title"><?php echo $item ?></h5>
      </div>
    </div>
<?php 
}
}
?>
  </div>
</div>
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


<div class="container">
  <div class="row">
    
<?php
$dir = scandir("../logos-clientes");
foreach ($dir as $item) {
    if(strpos($item,"png")) {?>
<div class="col-lg-4"><img src='../logos-clientes/<?php echo $item; ?>'></div>
<?php
  }
}
?>
  </div>
</div>
</body>
</html>
