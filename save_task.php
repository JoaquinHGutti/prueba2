<?php

include('connection.php');

if (isset($_POST['save_task'])) {
  $titulo = $_POST['titulo'];
  $link = $_POST['link'];
  $descripcion = $_POST['descripcion'];
  $query = "INSERT INTO videos(titulo, link, descripcion) VALUES ('$titulo', '$link', '$descripcion')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: contenido.php');

}

?>