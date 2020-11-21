<?php
	$no = $_GET["no"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from student where no=$no";
	$rs = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($rs);
?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style.css">
	<script>
		function del(){
			if (confirm("정말로 삭제하시겠습니까?")){
				location.href="delete.php?no="+"<?php echo $no ?>";
			}
		} 
	</script>
</head>
<body>
	<h1>학번 <?php echo $no ?>번 정보만 출력하기</h1>
	<table class="table1">
		<tr>
			<td>학번</td>
			<td><?php echo $row["no"] ?></td>
		</tr>
		<tr>
			<td>이름</td>
			<td><?php echo $row["name"] ?></td>
		</tr>
		<tr>
			<td>국어</td>
			<td><?php echo $row["kor"] ?></td>
		</tr>
		<tr>
			<td>영어</td>
			<td><?php echo $row["eng"] ?></td>
		</tr>
		<tr>
			<td>수학</td>
			<td><?php echo $row["math"] ?></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="button" class="bt" value="홈으로" onclick="location='index.php'">
				<input type="button" class="bt" value="수정하기" onclick="location='update.php?no=<?php echo $no ?>'">
				<input type="button" class="bt" value="삭제하기" onclick="del()">
		    </td>
		</tr>
	</table>
</body>
</html>