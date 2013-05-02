<?php
  include("conn.php");
  
    if(!empty($_GET['id'])){
		$d=$_GET['id'];
		$sql="delete from news where id='$d'";
		mysql_query($sql);
		echo "<script>alert('É¾³ý³É¹¦');location.href='index.php'</script>";		
	}
?>
