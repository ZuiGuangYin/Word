<?php
	mysql_connect("localhost","root","");
	mysql_select_db("php100");
	mysql_query("set names 'GBK'");
	$sql="select id,title,dates,contents from news";
	$query=mysql_query($sql);
	echo $query;
	echo "<hr />";
	
	while($rs=mysql_fetch_array($query)){
		$result[]=$rs;
	}
	print_r($result);

?>