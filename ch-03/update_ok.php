<?php
	$no = $_POST["no"];
	$name = $_POST["name"];
	$position = $_POST["position"];
	$salary = $_POST["salary"];
	$overtime = $_POST["overtime"];
	$overtimepay = $overtime * 2;
	$total = $salary + $overtimepay;
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "update person set name='$name', position='$position', salary=$salary, overtime=$overtime, overtimepay=$overtimepay, total=$total where no=$no";
	mysqli_query($conn, $query);	
?>
<meta http-equiv="refresh" content="0;url=index.php">