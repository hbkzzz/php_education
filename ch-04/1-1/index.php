<?php
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from orders order by no desc";
	$rs = mysqli_query($conn, $query);
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/style.css">
	<title></title>
</head>
<body>
	<table class="table1">
		<tr>
			<th>주문번호</th>
			<th>주문음식</th>
			<th>갯수</th>
			<th>취소</th>
		</tr>
		<?php while ($row=mysqli_fetch_array($rs)) { ?>
		<tr>
			<td><?php echo $row["no"]?></td>
			<td>
				<a href="content.php?no=<?php echo $row["no"] ?>">
					<?php echo $row["menu"]?>
				</a>
			</td>
			<td><?php echo $row["count"]?></td>
			<td>
				<a href="delete.php?no=<?php echo $row["no"] ?>">
					주문취소
				</a>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="4">
				<input type="button" class="bt" value="주문하기" onclick="location.href='order.php'">
			</td>
		</tr>
</body>
</html>