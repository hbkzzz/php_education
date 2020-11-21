<?php
	$no = $_POST["no"];
	$menu = $_POST["menu"];
	$count = $_POST["count"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "update orders set menu='$menu', count=$count where no=$no";
	mysqli_query($conn, $query);
?>
<meta http-equiv="refresh" content="0;url=index.php">