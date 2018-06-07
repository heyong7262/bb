<?php 
header("content-type:text/html;charset=utf8");
mysql_connect("127.0.0.1","root","root");
mysql_select_db("test");
mysql_query("set names utf8");
$sql="select * from art";
$res=mysql_query($sql);
$data=array();
while ($list=mysql_fetch_assoc($res)) {
	$data[]=$list;
}
 ?>

 <center>
 <table border="1px solid #ccc">
 	<tr>
 		<th>id</th>
 		<th>留言人</th>
 		<th>内容</th>
 	</tr>
 	<?php 
 		foreach ($data as $key => $val) {
 	 ?>
	 	<tr>
	 		<td><?php echo $val['id'] ?></td>
	 	 	<td><?php echo $val['username'] ?></td>
	 	 	<td><?php echo $val['content'] ?></td>
	 	</tr>
 	<?php } ?>
 </table>
 	
 </center>

