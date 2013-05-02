<?php
 include("conn.php");
 
 if(!empty($_GET['id'])){
	$d=$_GET['id'];
	$sql="select * from news where id='$d'";
	$query=mysql_query($sql);
	$rs=mysql_fetch_array($query);
	
	$upsql = "update news set hits=hits+1 where id='$d'";
	mysql_query($upsql);
	
 }
?>

<h1><?php echo $rs['title'] ?></h1>
<h2><?php echo $rs['dates'] ?></h2>
<h3>µã»÷Á¿£º<?php echo $rs['hits'] ?></h3>
<hr>
<?php echo $rs['contents'] ?>