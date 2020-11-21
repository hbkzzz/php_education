<?php
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from foods";
	$rs = mysqli_query($conn, $query);
?> 
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body> 
	<form name="frm1" method="post" action="order_ok.php">
		<select name="menu">
			<?php while($row=mysqli_fetch_array($rs)){ ?>
			<option values="<?php echo $row["name"] ?>">
				<?php echo $row["name"] ?>
			</option>
			<?php } ?>
		</select>
		<select name="count">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select>그릇
		<input type="submit" value="주문하기">
	</form>
</body>
</html>