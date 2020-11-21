<?php
	$menu = $_POST["menu"];
	$count = $_POST["count"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "insert into orders values (null, '$menu', $count)";
	mysqli_query($conn, $query);
?>
<meta http-equiv="refresh" content="0;url=index.php">