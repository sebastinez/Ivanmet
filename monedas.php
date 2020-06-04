<?php
use Goutte\Client;
  require __DIR__ . '/vendor/autoload.php';

        try {
          $client = new Client();
          $crawler = $client->request('GET', 'http://www.cda.org.ar/tipo_cambio.php');
          $pos = $crawler->filter('.MsoNormal')->each(function ($node) {
            return $node->text();
          });
          $pos2 = $crawler->filter('.MsoSubtitle')->each(function ($node) {
            return $node->text();
          });
          $pos = array_chunk($pos, 6);
          array_shift($pos);
          $cadena = join(" ", $pos2);
          $fecha = preg_match_all("(\d*\/\d*\/\d*)", $cadena, $fechaArr);
          $compra = preg_match_all("(\d*,\d*)", $cadena, $compraArr);
          $arr = array("001","dólar estadounidense",str_replace(",", ".", $compraArr[0][2]));
          array_unshift($pos,$arr);
          print_r(json_encode($pos));
        } catch (Exception $e) {
          if ($lang === 'en') {
            echo "Exchange not available";
          } else {
            echo "Cambio no disponible";
          }
        }
        ?>
