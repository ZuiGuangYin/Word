<?php
	include("conn.php"); //引入数据库连接文件
	
	if(!empty($_POST['sub'])){
		$title=$_POST['title'];
		$con=$_POST['con'];
		$sql="insert into news(id,title,dates,contents,hits) values (null,'$title',now(),'$con',hits)";
		mysql_query($sql);
	    echo "<script>alert('添加成功');location.href='index.php'</script>";
	}
	
?>
<form action="add.php" method="post">
标题：<input type="text" name="title"><br>
内容：<textarea rows="5" cols="50" name="con"></textarea><br>
<input type="submit" name="sub" value="发表">
</form>
