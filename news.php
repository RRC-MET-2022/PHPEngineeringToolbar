<?php
	include_once 'includes/dbh-inc.php';
	include_once 'header.php';
?>

<?php
	$sql = "SELECT * FROM progress;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
				echo $row['pageName']. "<br>";
			}	
	}

?>

<?php
	include_once 'footer.php';
?>