<?php
	include_once '_includes/head.php';
?>



<?php

  if (!isset($_COOKIE['u_name'])) {
    header("Location: ./login.php");
    exit();
  }

  // http://codersfolder.com/2016/08/simple-crud-with-php-mysqli/
  // Jag var tvungen att att kopiera den här koden... Jag provade själv men fick inte till det. Det som är bra med
  // den här länken är att jag även förstår koden. Det är bara det att jag måste tänka mer objektorienterat. För det är så den här koden är skriven.
  // Men som jag förstår så går det bra att blanda, koden funkar ändå. Men inte så bra för framtiden om det är fler som jag sitta med koden.

include_once '_includes/db.inc.php';

  if($_GET['id']) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM Aktiviteter WHERE id = {$id}";
    $result = $conn->query($sql);

    $data = $result->fetch_assoc();

    $conn->close();

  }
?>

  <main>
    <form action="_includes/edit.inc.php" method="POST" class="main__form">
    <h3>Ändra aktivitet</h3>
    <div class="row">
      <div class="col-lg-12 mb-3">
        <label for="rubrik">Rubrik</label>
        <input type="text" class="form-control" value="<?php echo $data['rubrik'] ?>" name="rubrik" >
    </div>

      <div class="col-lg-12 mb-3">
        <label for="name">Ange information</label>
        <textarea class="form-control" name="info" rows="3"> <?php echo $data['info'] ?> </textarea>
      </div>



    <hr class="mb-4">
    <button type="submit" name="submit" class="btn btn-primary btn-block">Ändra</button>
    <input type="hidden" name="id" value="<?php echo $data['id']?>" />
    </form>
  </main>



<?php
	include_once '_includes/footer.php';
?>
