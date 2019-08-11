<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require __DIR__ . '/vendor/autoload.php'; 

use Goutte\Client;
     try {
     $client = new Client();
     $crawler = $client->request('GET', 'http://www.cda.org.ar/tipo_cambio.php');
     $pos = $crawler->filter('.MsoSubtitle')->each(function($node){
       return $node->text();
     });
     $cadena = join(" ",$pos);
     $fecha = preg_match_all("(\d*\/\d*\/\d*)",$cadena,$fechaArr);
     $compra = preg_match_all("(\d*,\d*)",$cadena,$compraArr);
     echo "Pago del día ".$fechaArr[0][1]." Compra: ".$compraArr[0][2]." Venta: ".$compraArr[0][3];
}  catch (Exception $e) {
    echo "Cambio no disponible";
  }
?>