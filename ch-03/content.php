<?php
	$no = $_GET["no"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from person where no=$no";
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
			if(confirm("정말로 삭제하시겠습니까?")){
				location.href="delete.php?no="+"<?php echo $no ?>";
			}
		} 
	</script>
</head>
<body>
	<h1>사원번호 <?php echo $row["no"] ?>번 의 정보조회</h1>
	<table class="table1">
		<tr>
			<td>사원번호</td>
			<td><?php echo $row["no"] ?></td>
		</tr>
		<tr>
			<td>이름</td>
			<td><?php echo $row["name"] ?></td>
		</tr>
		<tr>
			<td>직책</td>
			<td><?php echo $row["position"] ?></td>
		</tr>
		<tr>
			<td>급여</td>
			<td><?php echo $row["salary"] ?> 만원</td>
		</tr>
		<tr>
			<td>초과근무</td>
			<td><?php echo $row["overtime"] ?> 시간</td>
		</tr>
		<tr>
			<td>수당</td>
			<td><?php echo $row["overtimepay"] ?> 만원</td>
		</tr>
		<tr>
			<td>총급여</td>
			<td><?php echo $row["total"] ?> 만원</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="button" class="bt" value="홈으로" onclick="location='index.php'">
				<input type="button" class="bt" value="수정하기" onclick="location='update.php?no=<?php echo $no ?>'">
				<input type="button" class="bt" value="삭제하기"" onclick="del()">
		    </td>
		</tr>
	</table>
</body>
</html>