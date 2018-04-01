<?php
  include_once '_includes/head.php';
?>

<header>
  <h1>Administration av aktiviteter</h1>
  <img src="./images/2.jpeg" alt="" srcset="">
</header>



  <main>
    <a href="./create.php" class="btn btn-info">Skapa aktivitet</a>
    <div class="table-responsive">
      <table class="table">
      <thead>
        <tr>
          <th scope="col">Nr</th>
          <th scope="col">Rubrik</th>
          <th scope="col">Info</th>
          <th scope="col">Datum</th>
          <th scope="col">Skapad</th>
          <th scope="col">Hantera</th>
        </tr>
      </thead>


      <?php

        ini_set('display_errors', 'On');
        error_reporting(E_ALL);

        include_once '_includes/db.inc.php';

        $sql = "SELECT * FROM Aktiviteter";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if (!isset($_COOKIE['u_name'])) {
          header("Location: ./login.php");
          exit();
        } else {
          if ($resultCheck < 1) {
            //Ingen tabell hittad
            echo '<div class="alert alert-primary mt-3" role="alert">
                  Du har inte lagt till någon aktivitet!
                  </div>';
          } else {
            //Tabell hittad. mysqli_fetch_assoc hämtar raderna som en array
            while($row = mysqli_fetch_assoc($result)) {
            echo '

                  <tbody>
                  <tr>
                  <th scope="row">' . $row['id'] .'</th>
                  <td>'. $row['rubrik'] .'</td>
                  <td>'. $row['info'] .'</td>
                  <td>'. $row['date'] .'</td>
                  <td>'. $row['skapad'] .'</td>
                  <td><a href="edit.php?action_type=edit&id='. $row['id'] .'" class="btn btn-warning btn-sm">Ändra</a>
                  <a href="userAction.php?action_type=delete&id='. $row['id'] .'" class="btn btn-danger btn-sm">Radera</a>
                  </td>
                  </tr>';

                }
              }
            }
          ?>

    </tbody>
    </table>
  </div>
</main>


<?php
	include_once '_includes/footer.php';
?>

