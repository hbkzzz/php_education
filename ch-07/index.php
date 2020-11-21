<?php
	if (isset($_GET["page"])) {
		$page = $_GET["page"];
		$group = $_GET["group"];
	}else{
		$page = 1;
		$group = 1;
	}
	$startRow = ($page-1) * 5;
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from guest order by no desc limit $startRow,5";
	$rs = mysqli_query($conn,$query);
?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<h1>
		게시판 만들기
		<input type="button" value="게시물 생성" class="bt" onclick="location.href='bulk.php'">
	</h1>
	<table class="table1">
		<tr>
			<th>글번호</th>
			<th>글쓴이</th>
			<th>글내용</th>
			<th>작성일</th>
			<th>조회수</th>
		</tr>
		<?php while($row=mysqli_fetch_array($rs)) { ?>
		<tr>
			<td>
				<a href="content.php?no=<?php echo $row["no"] ?>">
					<?php echo $row["no"]?>
				</a>
			</td>
			<td><?php echo $row["writer"] ?></td>
			<td><?php echo $row["content"] ?></td>
			<td><?php echo $row["writeday"] ?></td>
			<td><?php echo $row["hit"] ?></td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="5">
				<?php
					$query2 = "select count(*) as cnt from guest order by no desc";
					$rs2 = mysqli_query($conn,$query2);
					$row2 = mysqli_fetch_array($rs2);
					$cnt = $row2["cnt"];
					$pageCount = ceil($cnt/5);
					$groupCount = ceil($pageCount/5);
					if ($group != 1) {
						$prev = ($group - 2) * 5 + 1;
						$groupPrev = $group - 1;
						echo "<a href='index.php?page=1&group=1'>FIRST </a>";
						echo "<a href='index.php?page=$prev&group=$groupPrev'>PREV </a>";
					} 
					$start = ($group - 1) * 5 + 1;
					$end = $start + 4;
					for ($i = $start; $i <= $end; $i++) {
						if($i > $pageCount){
							break;
						}
						echo "<a href='index.php?page=$i&group=$group'>[$i] </a>";
					}
					$next = ($group * 5) + 1;
					$groupNext = $group + 1;
					if($group < $groupCount) {
						echo "<a href='index.php?page=$next&group=$groupNext'>NEXT </a>";
						echo "<a href='index.php?page=$pageCount&group=$groupCount'> END</a>";
					} 
				?>
			</td>
		</tr>
	</table>
</body>
</html>