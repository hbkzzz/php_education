<?php
	$name = $_POST["name"];
	$id = $_POST["id"];
	$addr = $_POST["addr"];
	$tel = $_POST["tel"];
	$email = $_POST["email"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "insert into customers (name, id, addr, tel, email) values ('$name', '$id', '$addr', '$tel', '$email')";
	mysqli_query($conn, $query);
?>
<meta http-equiv="refresh" content="0;url=index.php">