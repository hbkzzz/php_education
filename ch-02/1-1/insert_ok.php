<?php
	$name = $_POST["name"];
	$addr = $_POST["addr"];
	$tel = $_POST["tel"];
	$email = $_POST["email"];
	$job = $_POST["job"];
	$salary = $_POST["salary"];
	$model = $_POST["model"];
	$year = $_POST["year"];
	$remark = $_POST["remark"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "insert into car (name, addr, tel, email, job, salary, model, year, remark) values ('$name', '$addr', '$tel', '$email', '$job', '$salary', '$model', '$year', '$remark')";
	mysqli_query($conn, $query);
?>
<meta http-equiv="refresh" content="0;url=index.php">