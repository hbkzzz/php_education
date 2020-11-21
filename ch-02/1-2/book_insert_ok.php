<?php
	$name = $_POST["name"];
	$company = $_POST["company"];
	$price = $_POST["price"];
	$genre = $_POST["genre"];
	$count = $_POST["count"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "insert into books (name, company, price, genre, count) values ('$name', '$company', '$price', '$genre', $count)";
	mysqli_query($conn, $query);
?>
<meta http-equiv="refresh" content="0;url=index.php">