<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.php">Indice</a>
  </li>
  <li class="breadcrumb-item active">Imagenes</li>
</ol>


<div class="jumbotron" style="padding-top:30px; padding-bottom:30px;">
<form action="./api_images/add_images.php" method="POST" enctype="multipart/form-data">
  <h1>Agregar imagen de background</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo de archivo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresar titulo" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="file" class="form-control-file" id="file" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Subir imagen</button>
</form>
</div>

<div class="row">
<?php
try {
$json = file_get_contents("./file.json");
$json_data = json_decode($json,true);
foreach ($json_data as $key => $value) {
?>
<div class='col-xs-12 col-md-6 col-lg-4'>

  <img src='../expertise_imagenes/<?php echo $key; ?>.jpg' alt="<?php echo $value; ?>" class="p-4" style="width:100%;">
  <p class="px-4"><?php echo $value; ?></p>
  <button type="button" class="delete" data-toggle="modal" data-target="#borrar_<?php echo $key; ?>">
Borrar
</button>
  
<!-- Button trigger modal -->
<button type="button" class="edit" data-toggle="modal" data-target="#editar_<?php echo $key; ?>">
Editar
</button>
</form>
</div>

<!-- Modal Editar -->
<div class="modal fade" id="editar_<?php echo $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="./api_images/edit_images.php" method="POST">

      <div class="modal-body">
      Por favor modificar titulo de imagen
      <input type="text" name="titulo" value="<?php echo $value; ?>" style="width:100%; margin-top:15px;">
    </div>
      <div class="modal-footer">
        <input type="hidden" value="<?php echo $key; ?>" name="hash">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="edit" value="edit" class="btn btn-primary">Guardar cambios</button>
      </div>
      </form>

    </div>
  </div>
</div>

<!-- Modal Confirmacion Borrar -->
<div class="modal fade" id="borrar_<?php echo $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <h5 style="margin-top:15px;"><?php echo $value; ?></h5>
        <img src="../expertise_imagenes/<?php echo $key; ?>.jpg" width="100%" style="margin-top:15px;">
      </div>
      <div class="modal-footer">
        <form action="./api_images/delete_images.php" method="GET">
        <input type="hidden" value="<?php echo $key; ?>" name="hash">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Borrar</a>
        </form>
      </div>
    </div>
  </div>
</div>


<?php
}
} catch(Exception $e) {
  echo $e;
}
?>

</div>
