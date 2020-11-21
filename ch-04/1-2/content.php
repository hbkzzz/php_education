<?php
	$conn = mysqli_connect("localhost", "root", "1234","testdb");
	$query = "select * from vote order by no desc";
	$rs = mysqli_query($conn, $query);
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
	<table class="table1">
		<tr>
			<th>투표번호</th>
			<th>후보이름</th>
			<th>뽑은이유</th>
		</tr>
		<?php while ($row=mysqli_fetch_array($rs)) { ?>
		<tr>
			<td><?php echo $row["no"]?></td>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["cause"]?></td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="3">
				<input type="button" value="투표하기" onclick="location.href='index.php'">
				<input type="button" value="집계결과" onclick="location.href='result.php'">
			</td>
		</tr>
	</table>
</body>
</html>