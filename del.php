<?php
  include("conn.php");
  
    if(!empty($_GET['id'])){
		$d=$_GET['id'];
		$sql="delete from news where id='$d'";
		mysql_query($sql);
		echo "<script>alert('ɾ���ɹ�');location.href='index.php'</script>";		
	}
?>
