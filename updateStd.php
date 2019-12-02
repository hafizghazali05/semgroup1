<html>
<body>
<?php 

    include('config.php');

		$id = $_GET['id'];
				
		$sql = "UPDATE application SET status='APPROVED' WHERE id='$id'";
				
		mysqli_query($con, $sql); 

		echo '<script type="text/javascript">
		alert("Successfully Update!");
		window.location = "approveStd.php";
		</script>';
?>
</body>
</html>