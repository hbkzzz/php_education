<?php
	$no = $_GET["no"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from charges where no=$no";
	$rs = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($rs);
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<form name="frm1" method="post" action="update_ok.php">
		<table class="table1">
			<tr>
				<td>이름</td>
				<td>
					<input type="text" name="name" value="<?php echo $row["name"]?>">
				</td>
			</tr>
			<tr>
				<td>주소</td>
				<td>
					<input type="text" name="addr" value="<?php echo $row["addr"]?>">
				</td>
			</tr>
			<tr>
				<td>전력사용량</td>
				<td>
					<input type="text" name="employ" value="<?php echo $row["employ"]?>">
				</td>
			</tr>
			<tr>
				<td>누진대상</td>
				<td>
					<select name="fee">
						<option value="Y" <?php if($row["fee"]=="Y"){ ?>selected <?php } ?>>Y</option>
						<option value="N" <?php if($row["fee"]=="N"){ ?>selected <?php } ?>>N</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="hidden" name="no" value="<?php echo $row["no"]?>">
					<input type="button" class="bt" value="홈으로" onclick="location='index.php'">
					<input type="submit" class="bt" value="수정하기">
				</td>
			</tr>		
		</table>
	</form>
</body>
</html>