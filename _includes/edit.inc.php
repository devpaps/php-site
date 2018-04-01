<?php

//http://codersfolder.com/2016/08/simple-crud-with-php-mysqli/

  include_once 'db.inc.php';

  if ($_POST) {
  /*   $edit_rubrik = $_POST['rubrik'];
    $edit_info = $_POST['info']; */
    $edit_rubrik = mysqli_real_escape_string($conn, $_POST['rubrik']);
    $edit_info  = mysqli_real_escape_string($conn, $_POST['info']);
    $id = $_POST['id'];

    $sql = "UPDATE Aktiviteter SET rubrik = '$edit_rubrik', info = '$edit_info' WHERE id = '$id' " ;

    if ($conn->query($sql) === TRUE) {
      header('Location: ../admin.php?edit=uppdaterad');
      exit();
    } else {
      echo 'Error';
    }
  }
?>
