<?php
	$no = $_POST["no"];
	$name = $_POST["name"];
	$kor = $_POST["kor"];
	$eng = $_POST["eng"];
	$math = $_POST["math"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "update student set kor=$kor, eng=$eng, math=$math where no=$no";
	mysqli_query($conn, $query);
?>
<meta http-equiv="refresh" content="0;url=index.php">