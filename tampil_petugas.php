<?php 
include 'koneksi.php';
				
		//Untuk menampilkan total row
		$rs_all = mysql_query("select count(*) as total_all from petugas") or die(mysql_error());				   
list($all) = mysql_fetch_row($rs_all);
        ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
body,td,th {
	color: #000000;
}
.style7 {
	font-family: "Comic Sans MS";
	color: #FFFFFF;
	font-size: 18px;
}
.style8 {color: #000000}
.style14 {font-family: "Comic Sans MS"}
-->
</style>
</head>

<body>
<fieldset>
<legend>DATA PETUGAS</legend>
<form id="form1" name="form1" method="post" action="">
  <div align="center">
 <table width="725" height="87" border="0">
         <tr>
           <td height="28" colspan="5">Total Data : <?php echo $all;?></td>
        </tr>
         <tr>
  <td width="85" height="28" bgcolor="#d1e6a1"><div align="center" class="style14" >ID petugas</div></td>
  <td width="99" bgcolor="#d1e6a1"><div align="center" class="style14" >Nama</div></td>
  <td width="147" bgcolor="#d1e6a1"><div align="center" class="style14" >Alamat </div></td>
  <td width="158" bgcolor="#d1e6a1"><div align="center" class="style14" >Telp petugas</div></td>
  <td width="129" bgcolor="#d1e6a1"><div align="center" class="style14" >Foto petugas</div></td>
        </tr>
      <?php
	$i=0;
	$sql=mysql_query("select * from petugas"); 
	while($row=mysql_fetch_array($sql)){
	if($i==0){
		$bg="#FFFFFF";
		$i=1;
		}
	else{
		$bg="#d1e6a1";
		$i=0;
		}
		echo"
		<tr bgcolor=$bg>
		<td align=center>$row[id_petugas]</td>
		<td align=center>$row[nama_petugas]</td>
		<td align=center>$row[alamat_petugas]</td>
		<td align=center>$row[telepon_petugas]</td>
		<td align=center><img src='foto_petugas/$row[foto_petugas]' width=80 height=50></td>
		</tr>
		";
		}
		?>
    </table>
  </div>
</form>
</body>
</html>
