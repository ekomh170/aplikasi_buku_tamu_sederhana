<?php 

function open_connection() 
{
	$db_hostname = "localhost";
	$db_username = "root";
	$db_password = "";
	$db_name 	 = "db_buku_tamu";
	$link 		 = mysql_connect($db_hostname, $db_username, $db_password) or die ("Database Tidak Dapat Terkoneksi");
	mysql_select_db($db_name,$link);
	return $link;
}

?>