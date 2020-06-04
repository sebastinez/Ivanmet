<?php require(dirname(__DIR__) . "/localization/expertise.php"); ?>

<div class="secctionfotos zindex" id="proyectobg"></div>

<div class="body-container">
  <div class="secctionfotos" id="proyectoprimary"></div>

  <div class="body-container-header" id="text">Background</div>
  <div class="body-container-text">
    <ul>
      <?php
      $json = file_get_contents("./db/expertise.json");
      $json_data = json_decode($json, true);
      foreach ($json_data["expertise"] as $key => $value) :
        ?>
        <li><?= $value[$lang] ?></li>
        <hr>
      <?php endforeach; ?>
    </ul>
  </div>
  <div>


  </div>
</div>