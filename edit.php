<?php
	include("conn.php"); //�������ݿ������ļ�
	
	if(!empty($_GET['id'])){
		$d=$_GET['id'];
		$sql="select * from news where id='$d'";
		$query = mysql_query($sql);
		$rs=mysql_fetch_array($query);
		print_r($rs);
	}
		
	if(!empty($_POST['sub'])){
		$title=$_POST['title'];
		$con=$_POST['con'];
		$hid=$_POST['hid'];
		$sql="update news set title='$title',contents='$con' where id='$hid' limit 1";
		mysql_query($sql);
		echo "<script>alert('�޸ĳɹ�');location.href='index.php'</script>";
	}

?>
<form action="edit.php" method="post">
<input type="hidden" name="hid" value="<?php echo $rs['id'] ?>">
���⣺<input type="text" name="title" value="<?php  echo $rs['title'] ?>"><br>
���ݣ�<textarea rows="5" cols="50" name="con" ><?php  echo $rs['contents'] ?></textarea><br>
<input type="submit" name="sub" value="�޸�">
</form>
