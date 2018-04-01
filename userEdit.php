<?php
	include_once '_includes/head.php';
?>



<?php


  include_once '_includes/db.inc.php';

if (empty($_POST['rubrik']) || empty($_POST['info'])) {
  echo 'Du har inte fyllt i något';
} else {
  if (!empty($_POST['rubrik']) || !empty($_POST['info']) ) {
    $edit_rubrik = $_POST['rubrik'];
    $edit_info = $_POST['info'];
    $id = $_GET['id'];
    $sql = "UPDATE Aktiviteter SET rubrik = '$edit_rubrik', info = '$edit_info' WHERE id = '$id' " ;
    mysqli_query($conn, $sql);
     header('Location: ./admin.php?edit=uppdaterad');
    exit();
  } else {
  header('Location: ./admin.php?edit=error');
}

/*   $id = $_GET['id'];
  $sql = "UPDATE Aktiviteter WHERE id = '$id' ";
  $delete = mysqli_query($conn, $sql); */

/* UPDATE `Aktiviteter` SET `rubrik` = 'TÃ¥sjÃ¶trampet 7/12', `info` = 'Test' WHERE `Aktiviteter`.`id` = 22 */

}
?>

<?php
	include_once '_includes/footer.php';
?>
