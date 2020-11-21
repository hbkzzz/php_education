<?php
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select count(*) as cnt, name from vote group by name";
	$rs = mysqli_query($conn, $query);
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
	<form name="frm1" method="post" action="index.php">
		<table class="table1">
			<tr>
				<td>후보이름</td>
				<td>득표횟수</td>
			</tr>
			<?php while ($row=mysqli_fetch_array($rs)) { ?>
			<tr>
				<td><?php echo $row["name"] ?></td>
				<td><?php echo $row["cnt"] ?></td>
			</tr>
		    <?php } ?>
			<tr>
				<td colspan="2"><input type="submit" value="홈으로"></td>
			</tr>
		</table>
	</form>
</body>
</html>