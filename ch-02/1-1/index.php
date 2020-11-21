<?php
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from car";
	$rs = mysqli_query($conn, $query);
?>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
	<h1>차량보험 회원 정보</h1>
	<table class="table1">
        <tr>
			<th>고객번호</th>
			<th>이름</th>
			<th>주소</th>
			<th>전화번호</th>
			<th>이메일</th>
			<th>직업</th>
			<th>연봉</th>
			<th>보유차량</th>
			<th>연식</th>
			<th>비고</th>
		</tr>
		<?php while($row=mysqli_fetch_array($rs)) {	?>
		<tr>
			<td><?php echo $row["no"] ?></td>
			<td><?php echo $row["name"] ?></td>
			<td><?php echo $row["addr"] ?></td>
			<td><?php echo $row["tel"] ?></td>
			<td><?php echo $row["email"] ?></td>
			<td><?php echo $row["job"] ?></td>
			<td><?php echo $row["salary"] ?></td>
			<td><?php echo $row["model"] ?></td>
			<td><?php echo $row["year"] ?></td>
			<td><?php echo $row["remark"] ?></td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="10">
				<input type="button" class="bt" value="추가하기" onclick="location.href='insert.php'">
			</td>
		</tr>
	</table>
</body>
</html>