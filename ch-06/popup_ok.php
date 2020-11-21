<?php
	session_start();
	$id = $_POST["id"];
	$pw = $_POST["pw"];
	$conn = mysqli_connect("localhost", "root", "1234", "testdb");
	$query = "select * from manager where id='$id' and pw='$pw'";
	$rs = mysqli_query($conn, $query);
	if(mysqli_num_rows($rs) == 0){
?>
<script>
	alert("아이디와 패스워드가 일치하지 않습니다." + "\n" + "창을 종료합니다.");
	this.close();
</script>
<?php }
	else{
		$_SESSION["id"] = $id;
?>
<script>
	this.close();
	opener.document.location.reload();
</script>
<?php } ?>