<?php
    $writer = $_POST["writer"];
	$content = $_POST["content"];
    $writeday = $_POST["writeday"];
	$no = $_POST["no"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "insert into reply values (null, '$writer', '$content', '$writeday', $no)";
	mysqli_query($conn, $query);	
?>
<meta http-equiv="refresh" content="0;url=content.php?no=<?php echo $no?>">