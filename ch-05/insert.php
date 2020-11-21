<?php
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from charges";
	$rs = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($rs);
	$query2 = "select * from fees";
	$rs2 = mysqli_query($conn, $query2);
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<form name="frm1" method="post" action="insert_ok.php">
		<table class="table1">
			<tr>
				<td>이름</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>주소</td>
				<td><input type="text" name="addr"></td>
			</tr>
			<tr>
				<td>전력사용량</td>
				<td><input type="text" name="employ"></td>
			</tr>
			<tr>
				<td>누진대상</td>
				<td>
					<select name="fee">
						<?php while ($row2=mysqli_fetch_array($rs2)) { ?>
						<option values="<?php echo $row2["target"] ?>">
							<?php echo $row2["target"] ?>
						</option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="button" class="bt" value="홈으로" onclick="location='index.php'">
					<input type="submit" class="bt" value="저장하기">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>