<?php
	
	@mysql_connect("localhost:3306","root","") or die("mysql����ʧ��");
	@mysql_select_db("php100") or die("db����ʧ��");
	mysql_query("set names 'GBK'");
	
?>