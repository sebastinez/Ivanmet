<?php
use Goutte\Client;
  require __DIR__ . '/vendor/autoload.php';
  header('Access-Control-Allow-Origin: *');

        try {
          $client = new Client();
          $crawler = $client->request('GET', 'http://www.cda.org.ar/tipo_cambio.php');
          $pos = $crawler->filter('.MsoNormal')->each(function ($node) {
            return $node->text();
          });
          $pos2 = $crawler->filter('.MsoSubtitle')->each(function ($node) {
            return $node->text();
          });
          array_chunk($pos, 6);
          $cadena = join(" ", $pos2);
          $fecha = preg_match_all("(\d*\/\d*\/\d*)", $cadena, $fechaArr);
          $compra = preg_match_all("(\d*,\d*)", $cadena, $compraArr);
          $arr = array("dólar estadounidense",$compraArr[0][2]);
          array_push($pos,$arr);
          print_r(json_encode($pos));
        } catch (Exception $e) {
          if ($lang === 'en') {
            echo "Exchange not available";
          } else {
            echo "Cambio no disponible";
          }
        }
        ?>
