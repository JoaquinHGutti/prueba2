<!DOCTYPE html>
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
                    <li><a class="nav-link scrollto" href="post_login.php #about">About</a></li>
                    <li><a class="nav-link scrollto" href="post_login.php #cuentos">Cuentos</a></li>
                    <li><a class="nav-link scrollto " href="post_login.php #vocales">Vocales</a></li>
                    <li><a class="nav-link scrollto" href="post_login.php #figuras">Figuras Geométricas</a></li>
                    <li><a class="nav-link scrollto" href="post_login.php #numeros">Números</a></li>
                    <li><a class="nav-link scrollto" href="contenido.php">Edita cuentos</a></li>
                    <li><a class="nav-link scrollto" href="vocales.php">Edita Vocales</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
</header>
<main class="container p-4">
    <div class="row">
        <div class="card card-body">
            <form action="save_task.php" method="POST">
                <div class="form-group">
                    <input type="text" name="titulo" class="form-control" placeholder="Ingrese un  Titulo" autofocus>
                </div>
                <div class="form-group">
                    <textarea name="link" rows="2" class="form-control" placeholder="Ingrese el link del video"></textarea>
                </div>
                <div class="form-group">
                    <textarea name="descripcion" rows="2" class="form-control" placeholder="Ingrese un Description"></textarea>
                </div>
                <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar contenido">
            </form>
        </div>    
        <div class="col-md-8">
            <h2>Table</h2>
            <p>Contenido:</p>            
            <table class="table">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Link</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                        $query = "SELECT * FROM videos";
                        $result_tasks = mysqli_query($conn, $query);    
                        while($row = mysqli_fetch_assoc($result_tasks)) { 
                    ?>
                    <tr>
                        <td><?php echo $row['titulo']; ?></td>
                        <td><?php echo $row['link']; ?></td>
                        <td><?php echo $row['descripcion']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                <i class="fas fa-marker"></i> 
                            </a>
                            <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </a> 
                        </td> 
                        <?php } ?>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</main>
</html>