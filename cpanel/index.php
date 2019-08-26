<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-light bg-light static-top">

    <a class="navbar-brand mr-1" href="index.php">Panel de control</a>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-2x"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Preferencias</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Salir</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item <?php if($_GET["page"]=== "images") { echo "active"; } ?>">
        <a class="nav-link" href="index.php?page=images">
          <i class="fas fa-fw fa-image"></i>
          <span>Imagenes</span>
        </a>
      </li>
      <li class="nav-item <?php if($_GET["page"]=== "background") { echo "active"; } ?>">
        <a class="nav-link" href="index.php?page=background">
          <i class="fas fa-fw fa-archive"></i>
          <span>Background</span>
        </a>
      </li>
      <li class="nav-item <?php if($_GET["page"]=== "clientes") { echo "active"; } ?>">
        <a class="nav-link" href="index.php?page=clientes">
          <i class="fas fa-fw fa-user-friends"></i>
          <span>Clientes</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

      <?php if (isset($_GET["page"])) {
        $page = $_GET["page"];
        include("./pages/$page.php");

      } else {?>
      <h1>Bienvenido al panel de control de IVANMET</h1>
      <p>Seleccione una de las herramientas a su izquierda.</p>
    <?php }
      ?>
      </div>
      <!-- /.container-fluid -->

    

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>


</body>

</html>
