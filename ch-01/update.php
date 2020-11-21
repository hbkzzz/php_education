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
		function send(){
			if(frm1.no.value==""){
				alert("학번을 입력하세요");
				frm1.no.focus();
				return false;
			}
			if(frm1.name.value==""){
				alert("이름을 입력하세요");
				frm1.no.focus();
				return false;
			}
			if(frm1.kor.value==""){
				alert("국어점수를 입력하세요");
				frm1.no.focus();
				return false;
			}
			if(frm1.eng.value==""){
				alert("영어점수를 입력하세요");
				frm1.no.focus();
				return false;
			}
			if(frm1.math.value==""){
				alert("수학점수를 입력하세요");
				frm1.no.focus();
				return false;
			}
			document.frm1.submit();
		}
	</script>
</head>
<body>
	<h1>성적표 수정하기</h1>
	<form name="frm1" method="post" action="update_ok.php">
		<table class=table1>
			<tr>
				<td>학번:</td>
				<td><input type="text" name="no" value="<?php echo $row["no"] ?>" readonly></td>
			</tr>
			<tr>
				<td>이름:</td>
				<td><input type="text" name="name" value="<?php echo $row["name"] ?>"></td>
			</tr>
			<tr>
				<td>국어:</td>
				<td><input type="text" name="kor" value="<?php echo $row["kor"] ?>"></td>
			</tr>
			<tr>
				<td>영어:</td>
				<td><input type="text" name="eng" value="<?php echo $row["eng"] ?>"></td>
			</tr>
			<tr>
				<td>수학:</td>
				<td><input type="text" name="math" value="<?php echo $row["math"] ?>"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="button" class=bt value="수정하기" onclick="send()">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>