<?php
	$no = $_POST["no"];
	$writer = $_POST["writer"];
	$content = $_POST["content"];
    $writeday = $_POST["writeday"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "update guest set writer='$writer', content='$content', writeday='$writeday' where no=$no";
	mysqli_query($conn, $query);	
?>
<script>
	window.history.go(-2);
</script>
