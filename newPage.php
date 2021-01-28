<?php
	include_once 'includes/dbh-inc.php';
	include_once 'header.php';
?>
<form>
	<select type="courseID">
		<?php
			$sql = "SELECT * FROM courses;";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {?>
						<option value="<?php echo $row['CourseName'];?>"><?php echo $row['CourseName'];?></option>							
					}	
				}
		?>
	</select>
</form>
<?php
	include_once 'footer.php';
?>