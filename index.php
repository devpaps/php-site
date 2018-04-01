<?php
	include_once '_includes/head.php';
?>

<header>

	<?php
	// Error handling
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	function slumpaBild() {

		include_once "_includes/db.inc.php";

		$slump = rand(1, 4);

		$bild_sql = "SELECT * FROM header_bilder WHERE bilder_id=$slump";
		$bild_result = mysqli_query($conn, $bild_sql);
		$bild_rad = mysqli_fetch_array($bild_result);
		$bild_url = $bild_rad['bild'];
		echo '<img src=images/' . $bild_url . '>';
	}

		slumpaBild();
	?>

</header>

	<main>
		<h1>Nu är vi igång!</h1>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta maiores ex, atque, voluptatem suscipit nobis quod rerum hic unde accusantium placeat error dignissimos est similique, quibusdam laudantium? Eius, quisquam dolore?</p>
	</main>

	<aside>
		<h3>Kommande aktiviteter</h3>
		<?php
			include '_includes/db.inc.php';

      ini_set('display_errors', 'On');
      error_reporting(E_ALL);

			$datum = date ("Y-m-d");
			$sql = "SELECT * FROM Aktiviteter WHERE date >= '$datum' ORDER BY date LIMIT 5; ";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck < 1) {
				echo 'Inga aktiviteter inlagda';
			} else {
				while($row = mysqli_fetch_assoc($result)) {
					echo '<ul>
					<li><a href="#">'. $row['rubrik'] . ' ' . $row['date'] .' -></a></li>
					</ul>
					';
				}
			}
		?>
	</aside>
	</div>


<?php
	include_once '_includes/footer.php';
?>
