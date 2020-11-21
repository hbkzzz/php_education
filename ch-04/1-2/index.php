<?php 
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from candidate";
	$rs = mysqli_query($conn, $query);
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form name="frm1" method="post" action="insert.php">
		<select name="name">
			<?php while ($row=mysqli_fetch_array($rs)) { ?>
			<option values="<?php echo $row["name"] ?>">
				<?php echo $row["name"] ?>
			</option>
			<?php } ?>
		</select>
		<textarea name="cause"></textarea>
		<input type="submit" value="투표하기">
	</form>
</body>
</html>