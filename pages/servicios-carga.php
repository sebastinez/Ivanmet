<?php require(dirname(__DIR__)."/localization/servicios.php"); ?>

<div class="secctionfotos zindex" id="cargaproyectobg"></div>


<div class="body-container">
<div class="secctionfotos" id="cargaproyectoprimary"></div>

  <div class="body-container-header" id="text">
  <?php if ($lang === "en") { echo $servicioCarga_en_title;} else { echo $servicioCarga_es_title;} ?>

  </div>
  <div class="body-container-text">
  <?php if ($lang === "en") { echo $servicioCarga_en;} else { echo $servicioCarga_es;} ?>
  </div>
</div>