<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.php">Indice</a>
  </li>
  <li class="breadcrumb-item active">Clientes</li>
</ol>

<div class="jumbotron" style="padding-top:30px; padding-bottom:30px;">
<form>
  <h1>Agregar cliente</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de cliente</label>
    <input type="text" class="form-control" id="titulo" placeholder="Ingresar titulo" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="file" class="form-control-file" id="file" name="archivo">
  </div>
  
  <button type="submit" class="btn btn-primary">Agregar clientes</button>
</form>
</div>

<div class="container">
  <div class="row">
    
<?php
$dir = scandir("../logos-clientes");
foreach ($dir as $item) {
    if(strpos($item,"png")) {?>
<div class="col-lg-3 col-md-4 col-xs-6"><img src='../logos-clientes/<?php echo $item; ?>' width="100%"></div>
<?php
  }
}
?>
  </div>
</div>