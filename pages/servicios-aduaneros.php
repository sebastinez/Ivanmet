<?php require(dirname(__DIR__)."/localization/servicios.php"); ?>

<div class="secctionfotos zindex" id="serviciosaduanerosbg"></div>

<div class="body-container">
<div class="secctionfotos" id="serviciosaduanerosprimary"></div>

  <div class="body-container-header" id="text">
  <?php if ($lang === "en") { echo $serviciosAduaneros_en_title;} else { echo $serviciosAduaneros_es_title;} ?>
  </div>
  <div class="body-container-text">
  <?php if ($lang === "en") { echo $serviciosAduaneros_en;} else { echo $serviciosAduaneros_es;} ?>
  </div>
</div>