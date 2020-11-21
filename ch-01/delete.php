<?php
	$no = $_GET["no"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "delete from student where no=$no";
	mysqli_query($conn, $query);
?>
<meta http-equiv="refresh" content="0;url=index.php">