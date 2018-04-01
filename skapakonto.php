<?php
	include_once '_includes/head.php';
?>

  <main>
    <form class="loggaIn__form" action="_includes/signup.inc.php" method="POST">
      <h2>Skapa konto</h2>

        <label for="fornamn">Ditt förnamn</label>
        <input placeholder="Ex. Per" class="loggaIn__control" id="fornamn" type="text" name="fornamn" tabindex="1" required autofocus>


        <label for="efternamn">Ditt efternamn</label>
        <input placeholder="Ex. Eriksson" class="loggaIn__control" id="efternamn" name="efternamn" type="text" tabindex="2" required>


        <label for="email">Din email</label>
        <input placeholder="name@gmail.com" class="loggaIn__control" id="email" name="email" type="email" tabindex="3" required>


        <label for="username">Ditt användarnamn</label>
        <input placeholder="Mastersystem" class="loggaIn__control" id="username" name="username" type="text" tabindex="4" required>


        <label for="password">Ditt lösenord</label>
        <input placeholder="Ex. abc123" class="loggaIn__control" id="password" name="password" type="password" tabindex="5" required>


        <button name="submit" class="btn btn-primary btn-block" type="submit" tabindex="6">Bli medlem</button>

      <p><a href="./login.php" title="Tillbaka till logga in">Tillbaka till logga in</a></p>
    </form>
  </main>

<?php
	include_once '_includes/footer.php';
?>

