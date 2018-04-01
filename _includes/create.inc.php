<?php

if (isset($_POST['submit'])) {

  include 'db.inc.php';

  $rubrik = mysqli_real_escape_string($conn, $_POST['rubrik']);
  $info = mysqli_real_escape_string($conn, $_POST['info']);
  $date = mysqli_real_escape_string($conn, $_POST['date']);

  if (empty($rubrik) || empty($info)) {
    header("Location: ../admin.php?create=empty");
    exit();
  } else {
    //Kollar om samma rubrik finns redan
    $sql = "SELECT * FROM Aktiviteter WHERE rubrik = '$rubrik' ";
    $result = mysqli_query($conn, $sql);
  } if ($result == $rubrik){
    header('Location: ../admin.php?create=upptagenrubrik');
    exit();
  } else {
    $sql = "INSERT INTO Aktiviteter (rubrik, info, date)
    values ('$rubrik', '$info', '$date')";
    mysqli_query($conn, $sql);
    header('Location: ../admin.php?create=aktivitetsparad');
    exit();
  }

} else {
  header("Location: ..admin.php?create=tryckpasubmit");
  exit();
}