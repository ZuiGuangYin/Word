<?php
	include("conn.php"); //�������ݿ������ļ�
	
	if(!empty($_POST['sub'])){
		$title=$_POST['title'];
		$con=$_POST['con'];
		$sql="insert into news(id,title,dates,contents,hits) values (null,'$title',now(),'$con',hits)";
		mysql_query($sql);
	    echo "<script>alert('��ӳɹ�');location.href='index.php'</script>";
	}
	
?>
<form action="add.php" method="post">
���⣺<input type="text" name="title"><br>
���ݣ�<textarea rows="5" cols="50" name="con"></textarea><br>
<input type="submit" name="sub" value="����">
</form>
