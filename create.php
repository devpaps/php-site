<?php
	include_once '_includes/head.php';
?>


<main>

<?php
  if (!isset($_COOKIE['u_name'])) {
    //Om användaren inte är inloggad
    header("Location: ./login.php");
    exit();
  } else {
    //Om användaren är inloggad
    echo '
    <main>
      <form action="_includes/create.inc.php" method="POST" class="main__form">
        <h3>Lägg till aktivitet</h3>
        <div class="row">
          <div class="col-lg-12 mb-3">
            <label for="rubrik">Rubrik</label>
            <input type="text" class="form-control" placeholder="Ex. Tåsjöruset" name="rubrik" >
          </div>

          <div class="col-lg-12 mb-3">
            <label for="date">Vilket datum?</label>
            <input type="date" class="form-control" name="date">
          </div>

          <div class="col-lg-12 mb-3">
            <label for="name">Ange information</label>
            <textarea class="form-control" name="info" rows="3" placeholder="Max 255 tecken"></textarea>
          </div>


        <hr class="mb-4">
        <button class="btn btn-primary btn-block" type="submit" name="submit">Skapa aktivitet</button>
      </form>
    </main>';

  }
?>

</main>





<?php
	include_once '_includes/footer.php';
?>
