<?php require(dirname(__DIR__)."/localization/servicios.php"); ?>

<div class="secctionfotos zindex" id="segurosbg"></div>

<div class="body-container">
<div class="secctionfotos" id="segurosprimary"></div>

  <div class="body-container-header" id="text">
  <?php if ($lang === "en") { echo $serviciosSeguros_en_title;} else { echo $serviciosSeguros_es_title;} ?>
  </div>
  <div class="body-container-text">
  <?php if ($lang === "en") { echo $serviciosSeguros_en;} else { echo $serviciosSeguros_es;} ?>  
  </div>
</div>

