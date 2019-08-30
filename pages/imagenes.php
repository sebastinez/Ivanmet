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

    <div class="autoplay">
      <?php
      $json = file_get_contents("./db/images.json");
      $json_data = json_decode($json, true);
      foreach ($json_data as $key => $value) :
        ?>
        <div>
          <h2 style="text-align:center;"><?= $value ?></h2>
          <img src="./expertise_imagenes/<?= $key ?>.jpg" class="imageSlider">
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</div>