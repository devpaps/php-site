<?php

if (isset($_POST['submit'])) {

  // Inkluderar kopplingen till databasen
  include_once 'db.inc.php';

  //Inhämtar data från formuläret och gör om till text, så att det inte går att köra kod i något fält
  $fornamn = mysqli_real_escape_string($conn, $_POST['fornamn']);
  $efternamn = mysqli_real_escape_string($conn, $_POST['efternamn']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  //Kollar om något fält inte är ifyllt
  if (empty($fornamn) || empty($efternamn) || empty($email) || empty($username) || empty($password) ) {
    //Skickar tilbaka till sidan med ett felmeddelande
    header('Location: ../skapakonto.php?signup=empty');
    exit();
  } else {
    //Kollar så att dessa tecknen bara är inkluderade, inga siffror
    if (!preg_match("/^[a-öA-Ö]*$/", $fornamn) || !preg_match("/^[a-öA-Ö]*$/", $efternamn )) {
      header('Location: ../skapakonto.php?signup=invalid');
      exit();
    } else {
      //Kollar om emailen är en giltlig email adress
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../skapakonto.php?signup=email');
        exit();
      } else {
        // Kollar om det finns en likadan med samma användarnamn
        $sql = "SELECT * FROM login WHERE user_name = '$username' ";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
      } if ($resultCheck > 0) {
        header('Location: ../skapakonto.php?signup=usertaken');
        exit();
      } else {
        //Krypterar lösenordet
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        //Skickar in till databasen
        $sql = "INSERT INTO login (user_fornamn, user_efternamn, user_email, user_name, user_password)
        values ('$fornamn', '$efternamn', '$email', '$username', '$hashPassword')";
        mysqli_query($conn, $sql);
        header('Location: ../skapakonto.php?signup=success');
        exit();
      }
    }
  }


} else {
  header('Location: ../skapakonto.php');
  exit();
}