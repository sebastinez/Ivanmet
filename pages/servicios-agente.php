<?php require(dirname(__DIR__)."/localization/servicios.php"); ?>
<div class="secctionfotos zindex" id="agentedecargabg"></div>

<div class="body-container">
  <div class="secctionfotos" id="agentedecargaprimary"></div>

  <div class="body-container-header" id="text">
  <?php if ($lang === "en") { echo $agenteCarga_en_title;} else { echo $agenteCarga_es_title;} ?>

  </div>
  <div class="body-container-text">
  <?php if ($lang === "en") { echo $agenteCarga_en;} else { echo $agenteCarga_es;} ?>
    <a href="http://www.wnaweb.com/p-locations" style="opacity:1; cursor:pointer;">
<img src="./src/vmap.svg" id="mapaWNA">    </a>
  </div>

</div>
