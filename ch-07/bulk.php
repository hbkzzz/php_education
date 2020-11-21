<?php
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	for($i = 1; $i <= 100; $i++){
	$query="insert into guest (writer, content, writeday) values('홍길동', '$i 번째 게시물', '2020-04-01')";
	mysqli_query($conn, $query);
	}
?>
<script>
	alert("<?php echo $i ?>번째 데이터까지 입력완료 ")
	window.history.go(-1);
</script>
