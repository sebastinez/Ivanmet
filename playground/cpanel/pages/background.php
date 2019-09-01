<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.php">Indice</a>
  </li>
  <li class="breadcrumb-item active">Background</li>
</ol>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Español</th>
      <th scope="col">English</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    try {
      $json = file_get_contents("../db/expertise.json");
      $json_data = json_decode($json, true)["expertise"];
      foreach ($json_data as $key => $value) : ?>
        <tr>
          <td><?= $value["en"] ?></td>
          <td><?= $value["es"] ?></td>
          <td style="white-space:nowrap; "><button type="button" class="btn btn-danger mr-3" data-toggle="modal" data-target="#borrar_<?= $key ?>">Borrar</button><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar_<?= $key ?>">Editar</button>

          </td>
        </tr>

        <!-- Modal Editar -->
        <div class="modal fade" id="editar_<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="./api/background.php" method="POST">

                <div class="modal-body">
                  <p>Por favor modificar el texto del proyecto </p>
                  <textarea name="english" style="display:block; width:100%;" rows="5"><?= $value["en"] ?></textarea>
                  <textarea name="spanish" style="display:block; width:100%;" rows="5"><?= $value["es"] ?></textarea>

                </div>
                <div class=" modal-footer">
                  <input type="hidden" value="<?= $key ?>" name="key">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" name="edit" class="btn btn-primary">Guardar cambios</button>
                </div>
              </form>

            </div>
          </div>
        </div>

        <!-- Modal Confirmacion Borrar -->
        <div class="modal fade" id="borrar_<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Por favor confirmar la eliminación del siguiente Background.</p>
                <textarea name="english" readonly style="display:block; width:100%;" rows="5"><?= $value["en"] ?></textarea>
                <textarea name="spanish" readonly style="display:block; width:100%;" rows="5"><?= $value["es"] ?></textarea>
              </div>
              <div class="modal-footer">
                <form action="./api/background.php" method="POST">
                  <input type="hidden" value="<?= $key ?>" name="key">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" name="delete" class="btn btn-primary">Borrar</a>
                </form>
              </div>
            </div>
          </div>
        </div>

    <?php
      endforeach;
    } catch (Exception $e) {
      echo $e;
    }
    ?>
  </tbody>
</table>



<script>
  function modifyText(e) {
    console.log(e.target)
  }

  function changeInput() {
    const elementList = document.getElementsByClassName("input");
    const elementArray = Array.from(elementList)
    elementArray.forEach(m => {
      m.addEventListener("click", modifyText, false);
    })
  }

  document.addEventListener("DOMContentLoaded", changeInput, false);
</script>