<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.php">Indice</a>
  </li>
  <li class="breadcrumb-item active">Imagenes</li>
</ol>


<div class="jumbotron" style="padding-top:30px; padding-bottom:30px;">
  <form action="./api/images.php" method="POST" enctype="multipart/form-data">
    <h1>Agregar imagen de background</h1>
    <div class="form-group">
      <label for="exampleInputEmail1">Titulo de archivo</label>
      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresar titulo" autocomplete="off">
    </div>
    <div class="form-group">
      <input type="file" class="form-control-file" id="file" name="image">
    </div>
    <button type="submit" name="add" class="btn btn-primary">Subir imagen</button>
  </form>
</div>

<div class="row">
  <?php
  try {
    $json = file_get_contents("../db/images.json");
    $json_data = json_decode($json, true);
    foreach ($json_data as $key => $value) {
      ?>
      <div class='col-xs-12 col-md-6 col-lg-4'>

        <img src='../expertise_imagenes/<?= $key ?>.jpg' alt="<?= $value ?>" class="p-4" style="width:100%;">
        <p class="px-4"><?= $value ?></p>
        <button type="button" class="btn btn-danger delete" data-toggle="modal" data-target="#borrar_<?= $key ?>">
          Borrar
        </button>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success edit" data-toggle="modal" data-target="#editar_<?= $key ?>">
          Editar titulo
        </button>
        </form>
      </div>

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
            <form action="./api/images.php" method="POST">

              <div class="modal-body">
                Por favor modificar titulo de imagen
                <input type="text" name="titulo" value="<?= $value ?>" style="width:100%; margin-top:15px;">
              </div>
              <div class="modal-footer">
                <input type="hidden" value="<?= $key ?>" name="hash">
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
              Por favor confirmar la eliminación de la siguiente imagen.
              <h5 style="margin-top:15px;"><?= $value ?></h5>
              <img src="../expertise_imagenes/<?= $key ?>.jpg" width="100%" style="margin-top:15px;">
            </div>
            <div class="modal-footer">
              <form action="./api/images.php" method="POST">
                <input type="hidden" value="<?= $key ?>" name="hash">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" name="delete" class="btn btn-primary">Borrar</a>
              </form>
            </div>
          </div>
        </div>
      </div>


  <?php
    }
  } catch (Exception $e) {
    echo $e;
  }
  ?>

</div>