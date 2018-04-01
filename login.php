<?php
	include_once '_includes/head.php';
?>


 <main>
    <form action="_includes/login.inc.php" method="POST" class="loggaIn__form">
    <h2>Logga in</h2>
    <input type="text" class="loggaIn__control" name="username" placeholder="Username" autofocus="" />
    <input type="password" class="loggaIn__control" name="password" placeholder="Password"/>
    <button name="submit" class="btn btn-primary btn-block" type="submit">Login</button>
<!--     <label class="loggaIn__label">
        <input type="checkbox" class="loggaIn__checkbox" value="remember" name="remember" id="rememberMe"> Kom ihåg mig
    </label> -->
      <a href="./skapakonto.php" class="btn btn-outline-primary btn-block mt-5">Skapa konto</a>
    </form>
  </main>


<?php
	include_once '_includes/footer.php';
?>

