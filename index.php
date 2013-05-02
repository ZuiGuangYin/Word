<a href="add.php">添加内容</a><hr>
<form action="" method="get">
<input type="text" name="keys">
<input type="submit" name="sub" value="搜索">
</form><hr>
<?php
	include("conn.php");  //引入连接数据库
	
	if(!empty($_GET['keys'])){
		$w="title like '".$_GET['keys']."'";
	}
	else{
		$w=1;
	}
	
	$sql="select * from news where $w order by id desc limit 10";
	$query=mysql_query($sql); //mysql query只能执行一次
	
	while($rs=mysql_fetch_array($query)){
?>
<h2>标题：<a href="view.php?id=<?php echo $rs['id'] ?>"><?php echo $rs['title'] ?>
 |<a href="edit.php?id=<?php echo $rs['id'] ?>"> 编辑 | <a href="del.php?id=<?php echo $rs['id'] ?>">删除</a></h2>
<li><?php echo $rs['dates'] ?></li>
<p><?php echo iconv_substr($rs['contents'],0,5,"gbk") ?>.....</p>
<hr>
<?php
}
?>

