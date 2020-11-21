<?php
	$no = $_GET["no"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from guest where no=$no";
	$rs = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($rs);
    $hit = "update guest set hit=hit+1 where no=$no";
	mysqli_query($conn, $hit);
    $query2 = "select guest.*, reply.* from guest,reply where guest.no=reply.guest_no and reply.guest_no=$no";
    $rs2 = mysqli_query($conn, $query2);
?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style.css">
	<script>
		function del(){
			if(confirm("정말로 삭제하시겠습니까?")){
				location.href="delete.php?no="+"<?php echo $no ?>";
			}
        }  
	</script>
</head>
<body>
	<h1><?php echo $row["no"] ?>번 의 게시물 조회</h1>
	<table class="table1">
		<tr>
			<td>글번호</td>
			<td><?php echo $row["no"] ?></td>
		</tr>
		<tr>
			<td>작성자</td>
			<td><?php echo $row["writer"] ?></td>
		</tr>
		<tr>
			<td>내용</td>
			<td><?php echo $row["content"] ?></td>
		</tr>
		<tr>
			<td>작성일</td>
			<td><?php echo $row["writeday"] ?></td>
        </tr>
        <tr>
			<td>조회수</td>
			<td><?php echo $row["hit"] ?></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="button" class="bt" value="홈으로" onclick="location='index.php'">
				<input type="button" class="bt" value="수정하기" onclick="location='update.php?no=<?php echo $no ?>'">
				<input type="button" class="bt" value="삭제하기"" onclick="del()">
		    </td>
		</tr>
    </table>
    <h1>댓글입력</h1>
    <form method="post" action="reply_insert.php">
        <table class="table1">
            <tr>
                <td>이름</td>
                <td><input type="text" name="writer""></td>
            </tr>
            <tr>
                <td>댓글</td>
                <td><input type="text" name="content"></td>
            </tr>
            <tr>
                <td>작성일</td>
                <td><input type="text" name="writeday"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="hidden" name="no" value="<?php echo $row["no"] ?>">
                    <input type="submit"" class="bt" value="댓글쓰기">
                </td>
            </tr>
        </table>
    </form>
    <h1>댓글보기</h1>
    <table class="table1">
        <?php while($row2 = mysqli_fetch_array($rs2)){ ?>
            <tr>
                <td>댓글번호</td>
                <td><?php echo $row2["no"] ?></td>
                <td>이름</td>
                <td><?php echo $row2["writer"] ?></td>
                <td>작성일</td>
                <td><?php echo $row2["writeday"] ?></td>
            </tr>
            <script>
                function del_re(){
                    if(confirm("정말로 삭제하시겠습니까?")){
                        location.href="reply_delete.php?no="+"<?php echo $row2["no"] ?>";
                    }
                }
            </script>
            <tr>
                <td>댓글</td>
                <td colspan="5"><?php echo $row2["content"] ?></td>
            </tr>
            <tr>
                <td colspan="6">
                    <input type="button" class="bt" value="수정하기" onclick="location='reply_update.php?no=<?php echo $row2['no'] ?>'">
                    <input type="button" class="bt" value="삭제하기" onclick="del_re()">
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>