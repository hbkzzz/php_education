<?php
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from charges";
	$rs = mysqli_query($conn, $query);
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<table class="table1">
		<tr>
			<th>번호</th>
			<th>이름</th>
			<th>주소</th>
			<th>전력사용량</th>
			<th>누진대상</th>
			<th>총사용금액</th>
			<th>삭제</th>
		</tr>
		<?php while ($row=mysqli_fetch_array($rs)) { ?>
		<tr>
			<td><?php echo $row["no"]?></td>
			<td>
				<a href="update.php?no=<?php echo $row["no"] ?>">
					<?php echo $row["name"]?>
				</a>
			</td>
			<td><?php echo $row["addr"]?></td>
			<td><?php echo $row["employ"]?></td>
			<td><?php echo $row["fee"]?></td>
			<td><?php echo $row["sum"]?></td>
			<td>
				<a href="delete.php?no=<?php echo $row["no"] ?>">삭제하기</a>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="7">
				<input type="button" class="bt" value="입력하기" onclick="location.href='insert.php'">
			</td>
		</tr>
	</table>
</body>
</html>