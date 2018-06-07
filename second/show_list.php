<?php 
header("content-type:text/html;charset=utf8");
mysql_connect("127.0.0.1","root","root");
mysql_select_db("test");
mysql_query("set names utf8");
$username=$_POST['username'];
$content=$_POST['content'];
$sql="insert into art (username,content)values('$username','$content')";
if (mysql_query($sql)) {
	header("location:show.php");
}else{
	echo"<script>alert('留言失败');location.href='test.html'</script>";
	exit;
}
?>