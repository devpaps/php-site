<?php
  include_once '_includes/head.php';
?>


<?php

  include_once '_includes/db.inc.php';

  if (($_REQUEST['action_type'] == 'delete') && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM Aktiviteter WHERE id = '$id' ";
    $delete = mysqli_query($conn, $sql);
  } if ($delete) {
    header('Location: ./admin.php?delete=borttagen');
    exit();
  } else {
    echo 'Error!';
  }


?>

<?php
	include_once '_includes/footer.php';
?>

