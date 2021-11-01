<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<?php
include("connection.php");
$titulo = '';
$link = '';
$descripcion= '';

if  (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM videos WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $titulo = $row['titulo'];
            $link = $row['link'];
            $descripcion = $row['descripcion'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $titulo= $_POST['titulo'];
    $link = $_POST['link'];
    $descripcion = $_POST['descripcion'];

    $query = "UPDATE videos set titulo = '$titulo', link = '$link', descripcion = '$descripcion' WHERE id=$id";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Task Updated Successfully';
    $_SESSION['message_type'] = 'warning';
    header('Location: contenido.php');
}

?>
<html lang="es">
<head>
  <title>Jardín Mágico</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css%22%3E">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/modal.css" rel="stylesheet">
    <link href="assets/css/estilos.css" rel="stylesheet">
</head>
<?php 
    include("connection.php");

?>
<header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#cuentos">Cuentos</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Vocales</a></li>
                    <li><a class="nav-link scrollto" href="#figuras">Figuras Geométricas</a></li>
                    <li><a class="nav-link scrollto" href="#numeros">Números</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <a class="nav-link scrollto" href="index.php">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
</header><!-- End Header -->

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
        <div class="card card-body">
            <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input name="titulo" type="text" class="form-control" value="<?php echo $titulo; ?>" placeholder="Update Title">
                    </div>
                    <div class="form-group">
                        <textarea name="link" class="form-control" cols="30" rows="10"><?php echo $link;?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="descripcion" class="form-control" cols="30" rows="10"><?php echo $descripcion;?></textarea>
                    </div>
                    <button class=" btn btn-success" name="update">
                    Update
                    </button>
                    <a href="contenido.php" class="btn btn-success">Volver</a>
            </form>
        </div>
        </div>
    </div>
</div>


