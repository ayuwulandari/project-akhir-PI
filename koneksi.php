<?php
	$host="localhost";
	$user="root";
	$password="";
	$database="arb";
	$koneksi=mysql_connect($host,$user,$password);
	$pilih_database=mysql_select_db($database,$koneksi);
	if($pilih_database)
	{
		//echo "koneksi sukses";
	}
	else
	{
		echo"koneksi gagal";
	}
?>
