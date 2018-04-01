<?php

//session_start();

if (isset($_POST['submit'])) {

  include 'db.inc.php';

  $fornamn = mysqli_real_escape_string($conn, $_POST['fornamn']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);


  // Kolla om något fält är tomt
  if (empty($username) || empty($password)) {
    //Fel lösen eller username
    header("Location: ../index.php?login=empty");
    exit();
  } else {
    //kolla om användaren finns
    $sql = "SELECT * FROM login WHERE user_name= '$username' ";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
      //Ingen användare hittad
      header("Location: ../index.php?login=anvandare");
      exit();
    } else {
      //Användare hittad
      //Lagrat i en array som kallas $row
      if ($row = mysqli_fetch_assoc($result)) {
        //echo $row['user_name'];
        //Kolla om lösenordet är rätt med det i databasen, dehash
        $hashedPwdCheck = password_verify($password, $row['user_password']);
        //Fel lösenord
        if ($hashedPwdCheck == false) {
          header("Location: ../index.php?login=losenord");
          exit();
        } elseif ($hashedPwdCheck == true) {
          //Logga in användaren
          /* $_SESSION['u_id'] = $row['user_id'];
          $_SESSION['u_fornamn'] = $row['user_fornamn'];
          $_SESSION['u_efternamn'] = $row['user_efternamn'];
          $_SESSION['u_email'] = $row['user_email'];
          $_SESSION['u_name'] = $row['user_name'];
          $_SESSION['u_password'] = $row['user_password']; */
          //Lägger in cookie
          setcookie("u_name", $username, time() +60 * 60 * 24 * 365, '/');
          header("Location: ../admin.php?login=sucess");
          exit();
        }
      }
    }
  }

  // Om inget funkar
 } else {
  header("Location: ../index.php?login=natannat");
  exit();
}