<?php require(dirname(__DIR__) . "/localization/about.php"); ?>
<div class="secctionfotos zindex" id="aboutbg"></div>
<div class="body-container">
  <div class="body-container-header">
    <?php if ($lang === "en") {
      echo $about_en_title;
    } else {
      echo $about_es_title;
    } ?>
  </div>
  <div class="body-container-text hide" id="body">
    <?php if ($lang === "en") {
      echo $about_en;
    } else {
      echo $about_es;
    } ?>
  </div>
  <div class="secctionfotos" id="aboutprimary"></div>

</div>
<div class="body-servicios">
  <a href="?page=servicios-agente&s=1#text">
    <div class="body-container-servicios">
      <img src="./src/truck-loading.svg" class="about-icons">
      <div class="description">
        <?php if ($lang === "en") {
          echo "Freight Forwarder";
        } else {
          echo "Agentes de Carga";
        } ?>
      </div>
    </div>
  </a>
  <a href="?page=servicios-aduaneros&s=1#text">
    <div class="body-container-servicios">
      <img src="./src/user-tie.svg" class="about-icons">
      <div class="description">
        <?php if ($lang === "en") {
          echo "Customs Broker";
        } else {
          echo "Servicios Aduaneros";
        } ?>

      </div>

    </div>
  </a>
  <a href="?page=servicios-carga&s=1#text">
    <div class="body-container-servicios">
      <img src="./src/industry.svg" class="about-icons">
      <div class="description">
        <?php if ($lang === "en") {
          echo "Project Cargo";
        } else {
          echo "Carga de Proyecto";
        } ?>

      </div>

    </div>
  </a><a href="?page=servicios-oficina&s=1#text">
    <div class="body-container-servicios">
      <img src="./src/home.svg" class="about-icons">
      <div class="description">
        <?php if ($lang === "en") {
          echo "External Office of International Purchases";
        } else {
          echo "Oficina Externa de Compras Internacionales";
        } ?>

      </div>

    </div>
  </a><a href="?page=servicios-seguros&s=1#text">
    <div class="body-container-servicios">
      <img src="./src/handshake.svg" class="about-icons">
      <div class="description">
        <?php if ($lang === "en") {
          echo "Transportation Insurance";
        } else {
          echo "Seguros de Transporte";
        } ?>

      </div>

    </div>
  </a>
</div>
