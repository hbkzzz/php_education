<?php
	$no = $_GET["no"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "delete from charges where no=$no";
	$rs = mysqli_query($conn, $query);
?>
<meta http-equiv="refresh" content="0;url=index.php">