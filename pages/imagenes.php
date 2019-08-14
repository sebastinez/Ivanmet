<div class="secctionfotos zindex" id="proyectobg"></div>

<div class="body-container ">
  <div class="secctionfotos" id="proyectoprimary"></div>

  <div class="body-container-header" id="text">
    <?php if ($lang === "en") {
      echo "Images of projects done";
    } else {
      echo  "Im&aacute;genes de proyectos realizados";
    } ?>

  </div>
  <div class="body-container-text" id="loader" style="margin-top:100px; text-align:center; font-size:30px;">Cargando...</div>

  <div class="body-container-text hide" id="body">
    <!-- Slideshow container -->

    <?php
    $url = "./expertise_imagenes";
    if ($gestor = opendir($url)) {
      $fileArray = array();
      while (false !== ($entrada = readdir($gestor))) {
        if (strpos($entrada, "jpg")) {
          array_push($fileArray, $url . "/" . $entrada);
        }
      }
    } ?>

    <div class="autoplay">
      <?php foreach ($fileArray as $valor) { ?>
        <div>
          <h2 style="text-align:center;">
            <?php
            $title = substr(explode("/", $valor)[2], 0, -4);
            if (strstr($title, "Capsula")) {
              echo "C&aacute;psula de supervivencia SIPETROL";
            } elseif (strstr($title, "Grua")) {
              echo "Gr&uacute;as TEREX-INGENIERIA SIMA";
            } elseif (strstr($title, "nitrogeno")) {
              echo "Unidad de nitr&oacute;geno WEATHERFORD";
            } else {
              echo $title;
            }

            ?></h2>
          <img src="<?php echo htmlspecialchars_decode($valor, ENT_NOQUOTES); ?>" class="imageSlider">
        </div>
      <?php } ?>
    </div>

  </div>
</div>
