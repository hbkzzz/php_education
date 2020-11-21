<?php
	$no = $_GET["no"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from reply where no=$no";
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
			if(frm1.writer.value=="") {
				alert("이름을 입력하세요");
				frm1.writer.focus();
				return false;
            }
            if(frm1.content.value=="") {
				alert("댓글을 입력하세요");
				frm1.content.focus();
				return false;
			}
			if(frm1.writeday.value=="") {
				alert("작성일를 입력하세요");
				frm1.writeday.focus();
				return false;
			}
			document.frm1.submit();
		}
	</script>
</head>
<body>
	<h1>댓글 정보 수정하기</h1>
	<form name="frm1" method="post" action="reply_update_ok.php">
		<table class=table1>
			<tr>
				<td>댓글번호</td>
				<td><input type="text" name="no" value="<?php echo $row["no"] ?>" readonly></td>
			</tr>
			<tr>
				<td>이름</td>
				<td><input type="text" name="writer"" value="<?php echo $row["writer"] ?>"></td>
			</tr>
			<tr>
				<td>댓글</td>
				<td><input type="text" name="content" value="<?php echo $row["content"] ?>"></td>
			</tr>
			<tr>
				<td>작성일</td>
				<td><input type="text" name="writeday" value="<?php echo $row["writeday"] ?>"></td>
			</tr>
			<tr>
				<td colspan="2">
                    <input type="hidden" name="guest_no" value="<?php echo $row["guest_no"] ?>">
                    <input type="button" class="bt" value="수정하기" onclick="send()">
                    <input type="button" class="bt" value="돌아하기" onclick="location.href='content.php?no=<?php echo $row['guest_no'] ?>'">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>