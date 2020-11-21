<?php
	session_start();
?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style.css">
	<script>
		function win_open(){
			window.open("popup.php", "pop1", "width=500, height=300", "resizable=no");
		}
	</script>
</head>
<body>
	<nav class="nav-bar">
		<?php if(isset($_SESSION["id"])) { ?>
		<a href="logout.php">Logout</a>
		<?php }else{ ?>
		<a href="javascript:win_open();">Login</a>
		<?php } ?> 
	</nav>
	<table class="table1" width="600">
		<tr>
			<th>글번호</th>
			<th>글제목</th>
			<th>작성자</th>
			<th>작성일</th>
			<th>조회수</th>
		</tr>
		<tr>
			<td>1</td>
			<td>다대포 여행상품이 출시되었습니다.</td>
			<td>관리자</td>
			<td>2020.2.1</td>
			<td>1</td>
		</tr>
		<tr>
			<td>2</td>
			<td>해운대 여행상품이 출시되었습니다.</td>
			<td>관리자</td>
			<td>2020.2.1</td>
			<td>1</td>
		</tr>
		<tr>
			<td>3</td>
			<td>이기대 여행상품이 출시되었습니다.</td>
			<td>관리자</td>
			<td>2020.2.1</td>
			<td>1</td>
		</tr>
		<tr>
			<td>4</td>
			<td>광안리 여행상품이 출시되었습니다.</td>
			<td>관리자</td>
			<td>2020.2.1</td>
			<td>1</td>
		</tr>
		<tr>
			<td>5</td>
			<td>송도 여행상품이 출시되었습니다.</td>
			<td>관리자</td>
			<td>2020.2.1</td>
			<td>1</td>
		</tr>
		<?php
			if(isset($_SESSION["id"])){
				if($_SESSION["id"]=="admin"){ 
		?>
		<tr>
			<td colspan="5">
				<input type="button" class="bt" value="공지사항 추가">
			</td>
		</tr>
		<?php
				} 
			}
		?>
	</table>
</body>
</html>