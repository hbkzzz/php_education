<?php
	$no = $_GET["no"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from orders where no=$no";
	$rs = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($rs);
	$query2="select * from foods";
	$rs2 = mysqli_query($conn,$query2);
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form name="frm1" method="post" action="update.php">
		<select name="menu">
			<?php while($row2=mysqli_fetch_array($rs2)){ ?>
			<option value="<?php echo $row2["name"] ?>" <?php if($row2["name"]==$row["menu"]){ ?> selected <?php } ?>>
				<?php echo $row2["name"] ?>
			</option>
			<?php } ?>
		</select>
		<br><br>
		<select name="count">
			<option value="1" <?php if($row["count"]==1){ ?>selected <?php } ?>>1</option>
			<option value="2" <?php if($row["count"]==2){ ?>selected <?php } ?>>2</option>
			<option value="3" <?php if($row["count"]==3){ ?>selected <?php } ?>>3</option>
			<option value="4" <?php if($row["count"]==4){ ?>selected <?php } ?>>4</option>
			<option value="5" <?php if($row["count"]==5){ ?>selected <?php } ?>>5</option>
		</select>그릇
		<br><br>
		<input type="hidden" name="no" value="<?php echo $no ?>">
		<input type="submit" value="수정하기">
	</form>
</body>
</html>