<?php
	$name = $_POST["name"];
	$cause = $_POST["cause"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "insert into vote values(null, '$name', '$cause')";
	mysqli_query($conn, $query);
?>
<meta http-equiv="refresh" content="0;url=content.php">