<a href="add.php">�������</a><hr>
<form action="" method="get">
<input type="text" name="keys">
<input type="submit" name="sub" value="����">
</form><hr>
<?php
	include("conn.php");  //�����������ݿ�
	
	if(!empty($_GET['keys'])){
		$w="title like '".$_GET['keys']."'";
	}
	else{
		$w=1;
	}
	
	$sql="select * from news where $w order by id desc limit 10";
	$query=mysql_query($sql); //mysql queryֻ��ִ��һ��
	
	while($rs=mysql_fetch_array($query)){
?>
<h2>���⣺<a href="view.php?id=<?php echo $rs['id'] ?>"><?php echo $rs['title'] ?>
 |<a href="edit.php?id=<?php echo $rs['id'] ?>"> �༭ | <a href="del.php?id=<?php echo $rs['id'] ?>">ɾ��</a></h2>
<li><?php echo $rs['dates'] ?></li>
<p><?php echo iconv_substr($rs['contents'],0,5,"gbk") ?>.....</p>
<hr>
<?php
}
?>

