<?php
	$no = $_GET["no"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "delete from guest where no=$no";
	mysqli_query($conn, $query);	
?>
<script>
	window.history.go(-2);
</script>
