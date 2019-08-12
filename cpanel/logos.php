<?php

$dir = scandir("../logos-clientes");

$logoFiles = new stdClass();


foreach ($dir as $item) {
$name = trim(explode(".",$item)[0]);
$log = hash_file("sha256","../logos-clientes/".$item);
echo $log." ".$name."<br>";

//   if($item !== "..") {
// echo "<div><img src='../logos-clientes/".$item."' width='100px'><p>".trim(explode(".",$item)[0])."</p></div>";
// }
}

 ?>
