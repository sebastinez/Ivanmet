<div class="secctionfotos zindex" id="proyectobg"></div>

<div class="body-container">
  <div class="secctionfotos" id="proyectoprimary"></div>

  <div class="body-container-header" id="text">
    <?php if ($lang === "en") {
      echo "Currency Converter";
    } else {
      echo "Conversor de monedas";
    } ?>
  </div>
  <div class="body-container-text">
    <?php
    $browser = new Wolfcast\BrowserDetection();
    if ($browser->getName() != "Internet Explorer") {
      ?>
      <div id="cotizador">
        <div>
          <div>
            <div id="cotizador-text1"><span id="primaryValue"> </span> <span id="primaryCurrency"> </span> Es igual a</div>
            <div id="cotizador-text2">
              <span id="secondaryValue"> </span> <span id="secondaryCurrency"> </span>
            </div>
          </div>
          <div id="cotizador-space" />
          <div id="cotizador-table">
            <table>
              <tr>
                <td>
                  <input type="number" name="inputSecondary" class="cotizador-input" id="inputSecondary">
                </td>
                <td class="cotizador-space" />
                <td>
                  <select name="secondary" class="cotizador-input cotizador-selector" id="selectSecondary">


                  </select>
                </td>
              </tr>
              <tr>
                <td id="inputCell">
                  <input type="number" name="inputPrimary" class="cotizador-input" id="inputPrimary">
                </td>
                <td class="space" />

                <td>
                  <select name="primary" disabled class="cotizador-input cotizador-selector" id="selectPrimary">
                    <option value="">peso argentino</option>

                  </select>
                </td>
              </tr>

            </table>
          </div>
        </div>
      </div>
    </div>
    <div>


    </div>
  </div>

  <script src="pages/cotizador.js"></script>
<?php } else { ?>
  <h2>Incompatibilidad con Internet Explorer</h2>
  <p>Estimado usuario</p>
  <p>Le pedimos para usar el conversor de moneda, que utilice otro navegador que el Internet Explorer.</p>
  <p>A continuación le pasamos algunas opciones</p>
  <p><a href="https://www.google.com/intl/es-419/chrome/">Google Chrome</a><br><a href="https://www.mozilla.org/es-AR/firefox/new/">Mozilla Firefox</a></p>
  <p>Le pedimos disculpas por las molestias ocasionadas</p>
<?php } ?>