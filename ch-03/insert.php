<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style.css">
	<script>
		function send(){
			if(frm1.name.value=="") {
				alert("이름을 입력하세요");
				frm1.name.focus();
				return false;
			}
			if(frm1.position.value=="") {
				alert("직책을 입력하세요");
				frm1.position.focus();
				return false;
			}
			if(frm1.salary.value=="") {
				alert("급여를 입력하세요");
				frm1.salary.focus();
				return false;
			}
			if(frm1.overtime.value=="") {
				alert("초과근무 시간을 입력하세요");
				frm1.overtime.focus();
				return false;
			}
			document.frm1.submit();
		}
	</script>
</head>
<body>
	<h1>사원정보입력</h1>
	<form name="frm1" method="post" action="insert_ok.php">
		<table class="table1">
			<tr>
				<td>사원번호</td>
				<td>자동으로 증가합니다</td>
			</tr>
			<tr>
				<td>이름</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>직책</td>
				<td><input type="text" name="position"></td>
			</tr>
			<tr>
				<td>급여</td>
				<td><input type="text" name="salary"></td>
			</tr>
			<tr>
				<td>초과근무</td>
				<td><input type="text" name="overtime"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="button" class="bt" value="등록하기" onclick="send()">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>