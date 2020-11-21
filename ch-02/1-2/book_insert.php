<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/style.css">
	<script>
		function send(){
			if(frm1.name.value==""){
				alert("책이름을 입력하세요");
				frm1.name.focus();
				return false;
			}
			if(frm1.company.value==""){
				alert("출판사를 입력하세요");
				frm1.company.focus();
				return false;
			}
			if(frm1.price.value==""){
				alert("가격을 입력하세요");
				frm1.price.focus();
				return false;
			}
			if(frm1.genre.value==""){
				alert("장르를 입력하세요");
				frm1.genre.focus();
				return false;
			}
			if(frm1.count.value==""){
				alert("수량을 입력하세요");
				frm1.count.focus();
				return false;
			}
			document.frm1.submit();
		}
	</script>
</head>
<body>
	<h1>도서 정보 입력하기</h1>
	<form name="frm1" method="post" action="book_insert_ok.php">
		<table class="table1">
			<tr>
				<td>책번호</td>
				<td>자동으로 입력됩니다</td>
			</tr>
			<tr>
				<td>책이름</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>출판사</td>
				<td><input type="text" name="company"></td>
			</tr>
			<tr>
				<td>가격</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td>장르</td>
				<td><input type="text" name="genre"></td>
			</tr>
			<tr>
				<td>수량</td>
				<td ><input type="text" name="count"></td>
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