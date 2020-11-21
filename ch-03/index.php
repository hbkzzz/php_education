<?php
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from person";
	$rs = mysqli_query($conn, $query);
?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<h1>사원급여</h1>
	<p>수당은 초과근무 1시간 당 2만원 입니다.</p>
	<br>
	<table class="table1">
		<tr>
			<th>사원번호</th>
			<th>이름</th>
			<th>직책</th>
			<th>급여</th>
			<th>초과근무</th>
			<th>수당</th>
			<th>총급여</th>
		</tr>
		<?php while($row=mysqli_fetch_array($rs)){ ?>
		<tr>
			<td>
				<?php echo $row["no"] ?>
			</td>
			<td>
				<a href="content.php?no=<?php echo $row["no"] ?>">
					<?php echo $row["name"] ?>
				</a>
			</td>
			<td>
				<?php echo $row["position"] ?>
			</td>
			<td>
				<?php echo $row["salary"] ?>만원
			</td>
			<td>
				<?php echo $row["overtime"] ?>시간
			</td>
			<td>
				<?php echo $row["overtimepay"] ?>만원
			</td>
			<td>
				<?php echo $row["total"] ?>만원
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