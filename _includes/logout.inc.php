<?php

  if (isset($_POST['submit'])) {

    unset($_COOKIE['u_name']);
    setcookie('u_name', null, -1, '/');
    // Slashen måste jag ha för att jag ska kollgas ut på hela webbsidan med alla undersidor. Tog ett tag innan jag fattade det. Har ju gjort likadant när jag skapar en cookie. Om jag inte hade gjort det så gäller cookien bara på en sida
    header("Location: ../index.php");
    exit();
  } else {
    echo 'Något gick fel';
  }

?>