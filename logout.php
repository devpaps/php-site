<?php
	include_once '_includes/head.php';
?>


 <main class="loggaIn">
    <form action="_includes/login.inc.php" method="POST" class="loggaIn__form">
    <h2>Logga ut</h2>
    <input type="text" class="loggaIn__control" name="username" placeholder="Username" autofocus="" />
    <input type="password" class="loggaIn__control" name="password" placeholder="Password"/>
    <button name="submit" class="loggaIn__btn" type="submit">Login</button>
    <label class="loggaIn__label">
        <input type="checkbox" class="loggaIn__checkbox" value="remember" name="remember" id="rememberMe"> Kom ihåg mig
    </label>
    <button class="loggaIn__btn loggaIn__btn--regacc">
      <a href="./skapakonto.php">Skapa konto</a>
    </button>
    </form>
  </main>


<?php
	include_once '_includes/footer.php';
?>

