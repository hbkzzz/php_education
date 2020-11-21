<?php
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from customers";
	$rs = mysqli_query($conn, $query);
	$query2 = "select * from books";
	$rs2 = mysqli_query($conn, $query2);
?>	
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
	<h1>회원 정보</h1>
	<table class="table1">
		<tr>
			<th>고객번호</th>
			<th>고객명</th>
			<th>주민번호</th>
			<th>주소</th>
			<th>전화번호</th>
			<th>이메일</th>
		</tr>
		<?php while($row = mysqli_fetch_array($rs)){ ?>
		<tr>
			<td><?php echo $row["no"] ?></td>
			<td><?php echo $row["name"] ?></td>
			<td><?php echo $row["id"] ?></td>
			<td><?php echo $row["addr"] ?></td>
			<td><?php echo $row["tel"] ?></td>
			<td><?php echo $row["email"] ?></td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="6">
				<input type="button" class=bt value="입력하기" onclick="location.href='custom_insert.php'">
			</td>
		</tr>
	</table>
	<h1>도서 정보</h1>
	<table class="table1">	
		<tr>
			<th>책번호</th>
			<th>책명</th>
			<th>출판사</th>
			<th>가격</th>
			<th>장르</th>
			<th>수량</th>
		</tr>
		<?php while($row2 = mysqli_fetch_array($rs2)){ ?>
		<tr>
			<td><?php echo $row2["no"] ?></td>
			<td><?php echo $row2["name"] ?></td>
			<td><?php echo $row2["company"] ?></td>
			<td><?php echo $row2["price"] ?></td>
			<td><?php echo $row2["genre"] ?></td>
			<td><?php echo $row2["count"] ?></td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="6">
				<input type="button" class=bt value="추가하기" onclick="location.href='book_insert.php'">
			</td>
		</tr>
	</table>
</body>
</html>