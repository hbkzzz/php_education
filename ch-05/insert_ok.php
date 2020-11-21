<?php
	$name = $_POST["name"];
	$addr = $_POST["addr"];
	$employ = $_POST["employ"];
	$fee = $_POST["fee"];
	$sum = $employ * 30;
	if($fee == "Y"){
		$sum = $sum + 10000;
	}

	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "insert into charges values(null,'$name', '$addr', $employ, '$fee', $sum)";
	$rs = mysqli_query($conn, $query);
?>
<meta http-equiv="refresh" content="0;url=index.php">