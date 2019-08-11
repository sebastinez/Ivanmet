<?php

use Goutte\Client;

setcookie("intro", true);
if (isset($_GET["lang"])) {
  setcookie("lang", $_GET["lang"]);
  $lang = $_GET["lang"];
} else if (isset($_COOKIE["lang"])) {
  $lang = $_COOKIE["lang"];
} else {
  $lang = "es";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel='stylesheet' href='./src/logo.css'>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./pages/cotizador.css">
  <link rel="stylesheet" href="./pages/horarios.css">
  <link rel="stylesheet" href="./pages/dimensiones.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css" />
  <link href="./semantic.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
  <script src="https://kit.fontawesome.com/854c6affe2.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans&display=swap" rel="stylesheet">
  <title>IVANMET</title>
</head>

<body>
  <script>
    let lang = "<?php echo $lang; ?>";
  </script>

  <?php
  require __DIR__ . '/BrowserDetection.php';
  require __DIR__ . '/vendor/autoload.php';
  ?>

  <?php if (!isset($_COOKIE["intro"])) { ?><div id="landingLogo">
      <div id="introAnimacion">
        <div><img id="titulo" src="./src/Titulo.png"></div>
        <div><img id="titulo-secundario" src="./src/Titulo secundario.png"></div>
        <div><img id="ventana" src='./src/Ventana.png' alt=''></div>
        <div><img id="flecha" src='./src/Flecha.png' alt=''></div>
      </div>
      <div id="flexBoton">
        <!-- <a href="?lang=es" class="boton">Español</a>
      <div class="boton disabled" onclick="alert('English page is under construction. Please return at a later point.')">English</div> -->
        <div id="skip" onClick="entrar()">Saltar introduccion</div>
      </div>
    </div>
  <?php } ?>

  <div id="page" <?php if (isset($_COOKIE["intro"])) { ?> style="display:block;" <?php } ?>>
    <div class="header">
      <div id="bgAniversario">
        <div id="textoAniversario">
          <?php
          if ($lang === "en") {
            echo "MORE THAN 30 YEARS AT THE SERVICE OF THE INDUSTRY";
          } else {
            echo "MÁS DE 30 AÑOS AL SERVICIO DE LA INDUSTRIA";
          }
          ?>
        </div>
      </div>
      <div><a href="?p=about"><img src='./src/LOGO FINAL CURVAS.png' alt='Logo IVANMET' id="logo"></a></div>
      <div id="bannerDiv"><img id="banner" src='./img/banner.png' alt=''></div>

      <div><a href="http://www.wnaweb.com/" target="_blank"><img src="./src/WNA.png" id="WNALogo" alt=""></a></div>
      <div><img src="./src/DUNS.png" id="DUNSLogo" alt=""></div>
    </div>
    <?php include("./navbar.php");
    //include("./herramientas_float.php");
    ?>
    <div class="body">
      <div id="herramientas_div">
        <?php if ($lang === "en") {
          echo "<div class='herrItem'>News and Utilities</div>";
        } else {
          echo "<div class='herrItem'>Noticias y Herramientas</div>";
        } ?>
      </div>
      <div id="cambio">
        <?php
        try {
          $client = new Client();
          $crawler = $client->request('GET', 'http://www.cda.org.ar/tipo_cambio.php');
          $pos = $crawler->filter('.MsoSubtitle')->each(function ($node) {
            return $node->text();
          });
          $cadena = join(" ", $pos);
          $fecha = preg_match_all("(\d*\/\d*\/\d*)", $cadena, $fechaArr);
          $compra = preg_match_all("(\d*,\d*)", $cadena, $compraArr);
          if ($lang === "en") {
            print("Customs Payment Dollar " . $fechaArr[0][1] . "<span id='brCambio'><br></span> Buy: " . $compraArr[0][2] . " Sell: " . $compraArr[0][3]);
          } else {
            print("Pago Aduana dólar " . $fechaArr[0][1] . "<span id='brCambio'><br></span> Compra: " . $compraArr[0][2] . " Venta: " . $compraArr[0][3]);
          }
        } catch (Exception $e) {
          if ($lang === 'en') {
            echo "Exchange not available";
          } else {
            echo "Cambio no disponible";
          }
        }
        ?>

      </div>

      <?php if (isset($_GET["page"])) {
        $page = $_GET["page"];
      } else {
        $page = "about";
      }
      include("./pages/$page.php");
      ?>
    </div>
    <?php include("./footer.php") ?>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script type="text/javascript" src="./slick/slick.min.js"></script>
  <script src="./script.js"></script>

</body>

</html>
