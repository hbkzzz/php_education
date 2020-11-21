<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/style.css">
	<script>
		function send(){
			if(frm1.name.value==""){
				alert("이름를 입력하세요");
				frm1.name.focus();
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
			if(frm1.job.value==""){
				alert("직업을 입력하세요");
				frm1.job.focus();
				return false;
			}
			if(frm1.salary.value==""){
				alert("연봉을 입력하세요");
				frm1.salary.focus();
				return false;
			}
			if(frm1.model.value==""){
				alert("보유차량을 입력하세요");
				frm1.model.focus();
				return false;
			}
			if(frm1.year.value==""){
				alert("보유차량 연식을 입력하세요");
				frm1.year.focus();
				return false;
			}
			if(frm1.remark.value==""){
				alert("비고를 입력하세요");
				frm1.remark.focus();
				return false;
			}
			document.frm1.submit();
		}
	</script>
</head>
<body>
	<h1>고객정보 추가하기</h1>
	<form name="frm1" method="post" action="insert_ok.php">
		<table class="table1">
			<tr>
				<td>고객번호</td>
				<td>자동으로 입력됩니다</td>
			</tr>
			<tr>
				<td>이름</td>
				<td><input type="text" name="name"></td>
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
				<td>직업</td>
				<td><input type="text" name="job"></td>
			</tr>
			<tr>
				<td>연봉</td>
				<td><input type="text" name="salary"></td>
			</tr>
			<tr>
				<td>보유차량</td>
				<td><input type="text" name="model"></td>
			</tr>
			<tr>
				<td>차량연식</td>
				<td><input type="text" name="year"></td>
			</tr>
			<tr>
				<td>비고</td>
				<td><input type="textarea" name="remark"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="button" class=bt value="홈으로" onclick="location='index.php'">
					<input type="button" class=bt value="입력하기" onclick="send()">
				</td>
			</tr>	
		</table>
	</form>
</body>
</html>