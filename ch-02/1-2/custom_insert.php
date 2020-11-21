<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/style.css">
	<script>
		function send(){
			if(frm1.name.value==""){
				alert("이름을 입력하세요");
				frm1.name.focus();
				return false;
			}
			if(frm1.id.value==""){
				alert("주민번호를 입력하세요");
				frm1.id.focus();
				return false;
			}
			if(frm1.addr.value==""){
				alert("주소를 입력하세요");
				frm1.addr.focus();
				return false;
			}
			if(frm1.tel.value==""){
				alert("전화번호를 입력하세요");
				frm1.tel.focus();
				return false;
			}
			if(frm1.email.value==""){
				alert("이메일을 입력하세요");
				frm1.email.focus();
				return false;
			}
			document.frm1.submit();
		}
	</script>
</head>
<body>
	<h1>회원정보 입력하기</h1>
	<form name="frm1" method="post" action="custom_insert_ok.php">
		<table class="table1">
			<tr>
				<td>회원번호</td>
				<td>자동으로 입력됩니다</td>
			</tr>
			<tr>
				<td>고객명</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>주민번호</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>주소</td>
				<td><input type="text" name="addr"></td>
			</tr>
			<tr>
				<td>전화번호</td>
				<td><input type="text" name="tel"></td>
			</tr>
			<tr>
				<td>이메일</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="button" class=bt value="홈으로" onclick="location.href='index.php'">	
					<input type="button" class=bt value="입력하기" onclick="send()">
				</td>
			</tr>
		</table>
    </form>
</body>
</html>