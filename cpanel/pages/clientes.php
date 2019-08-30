<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.php">Indice</a>
  </li>
  <li class="breadcrumb-item active">Clientes</li>
</ol>

<div class="jumbotron" style="padding-top:30px; padding-bottom:30px;">
  <form action="./api/clientes.php" method="POST" enctype="multipart/form-data">
    <h1>Agregar cliente</h1>
    <div class="form-group">
      <label for="exampleInputEmail1">Nombre de cliente</label>
      <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Ingresar titulo" autocomplete="off">
    </div>
    <div class="form-group">
      <input type="file" class="form-control-file" id="file" name="archivo">
    </div>

    <button type="submit" name="add" class="btn btn-primary">Agregar clientes</button>
  </form>
</div>

<div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Logo</th>
        <th scope="col">Cliente</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $json = file_get_contents("../db/clientes.json");
      $json_data = json_decode($json, true);
      foreach ($json_data as $key => $value) : ?>
        <tr>
          <td><img src='../logos-clientes/<?= $key ?>.jpg' height="50px">
          </td>
          <td><?= strtoupper($value); ?></td>
          <td style="white-space:nowrap; "><button type="button" class="btn btn-danger mr-3" data-toggle="modal" data-target="#borrar_<?= $key ?>">Borrar</button></td>
        </tr>

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
                <p>Por favor confirmar la eliminación del siguiente cliente.</p>
                <h5 class="text-center mt-3"><?= strtoupper($value); ?></h5>
                <img src="../logos-clientes/<?= $key ?>.jpg" width="100%" style="margin-top:15px;">
              </div>
              <div class="modal-footer">
                <form action="./api/clientes.php" method="POST">
                  <input type="hidden" value="<?= $key ?>" name="hash">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" name="delete" class="btn btn-primary">Borrar</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php
      endforeach;
      ?>
    </tbody>
</div>