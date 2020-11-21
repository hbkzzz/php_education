<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript">
		function send(){
			if(frm1.id.value != "" && frm1.pw.value != ""){
				document.frm1.submit();
			}
		}
	</script>
</head>
<body>
	<form name="frm1" method="post" action="popup_ok.php">
		<table class="table1">
			<tr>
				<td>ID</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>PW</td>
				<td><input type="password" name="pw"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="button" class="bt" value="로그인" onclick="send()">
					<input type="reset" class="bt" value="리셋">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>