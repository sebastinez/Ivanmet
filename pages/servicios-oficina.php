<?php require(dirname(__DIR__)."/localization/servicios.php"); ?>

<div class="secctionfotos zindex" id="oficinaexternabg"></div>
<div class="body-container">
<div class="secctionfotos" id="oficinaexternaprimary"></div>

  <div class="body-container-header" id="text">
  <?php if ($lang === "en") { echo $serviciosOficina_en_title;} else { echo $serviciosOficina_es_title;} ?>
  </div>
  <div class="body-container-text">
  <?php if ($lang === "en") { echo $serviciosOficina_en;} else { echo $serviciosOficina_es;} ?>
  </div>
</div>