<?php
	$name = $_POST["name"];
	$position = $_POST["position"];
	$salary = $_POST["salary"];
	$overtime = $_POST["overtime"];
	$overtimepay = $overtime * 2;
	$total = $salary + $overtimepay;
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "insert into person (name, position, salary, overtime, overtimepay, total) values ('$name', '$position', $salary, $overtime, $overtimepay, $total)";
	mysqli_query($conn, $query);	
?>
<meta http-equiv="refresh" content="0;url=index.php">