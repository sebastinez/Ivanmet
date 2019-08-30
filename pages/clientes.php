<?php require(dirname(__DIR__) . "/localization/clientes.php"); ?>

<div class="secctionfotos zindex" id="clientesbg"></div>

<div class="body-container">
  <div class="secctionfotos" id="clientesprimary"></div>

  <div class="body-container-header">
    <?php if ($lang === "en") {
      echo $clientes_en_title;
    } else {
      echo $clientes_es_title;
    } ?>
  </div>
  <div class="body-container-text">
    <?php if ($lang === "en") {
      echo $clientes_en;
    } else {
      echo $clientes_es;
    } ?>
    <div class="customer-logos">
      <?php

      $json = file_get_contents("./db/clientes.json");
      $json_data = array_chunk(json_decode($json, true), 7, true);
      foreach ($json_data as $valor) : ?>
        <div class="divSlide">
          <?php foreach ($valor as $key => $value) :
              ?>
            <div><img class="imgSlide" src="./logos-clientes/<?= $key ?>.jpg"></div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>