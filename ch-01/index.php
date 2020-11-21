<?php
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from student";
	$rs = mysqli_query($conn, $query);
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<h1>학생 테이블 불러오기</h1>
	<table class="table1">
		<tr>
			<th>학번</th>
			<th>이름</th>
			<th>국어</th>
			<th>영어</th>
			<th>수학</th>
		</tr>
		<?php while($row=mysqli_fetch_array($rs)){ ?>
		<tr>
			<td><?php echo $row["no"] ?></td>
			<td>
				<a href="content.php?no=<?php echo $row["no"] ?>">
					<?php echo $row["name"] ?>
				</a>
			</td>
			<td><?php echo $row["kor"] ?></td>
			<td><?php echo $row["eng"] ?></td>
			<td><?php echo $row["math"] ?></td>
		</tr>
		<?php } ?>		
	    <tr>
	    	<td colspan="5">
	    		<input type="button" class="bt" value="성적입력" onclick="location.href='insert.php'">
	    	</td>
	    </tr>
	</table>
</body>
</html>