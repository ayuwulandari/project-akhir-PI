<?php 
include 'koneksi.php';
				
		//Untuk menampilkan total row
		$rs_all = mysql_query("select count(*) as total_all from blangko") or die(mysql_error());				   
list($all) = mysql_fetch_row($rs_all);
        ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Data penerima</title>
</head>
<body>
<table width="545" border="0" cellpadding="2" cellspacing="2" align="center">
  <caption align="center">
    <div align="center"><strong>DATA PENGIRIMAN</strong></div>
  </caption>
  <tr bgcolor="#7FCAE6"">
    <td width="47" bgcolor="#d1e6a1"><div align="center">No Resi </div></td>
    <td width="65" bgcolor="#d1e6a1"><div align="center">Nama Pengirim</div></td>
    <td width="65" bgcolor="#d1e6a1"><div align="center">Alamat Pengirim</div></td>
    <td width="87" bgcolor="#d1e6a1"><div align="center">Telepon Pengirim</div></td>
	<td width="95" bgcolor="#d1e6a1"><div align="center">Nama Penerima</div></td>
	<td width="95" bgcolor="#d1e6a1"><div align="center">Alamat Penerima</div></td>
	<td width="95" bgcolor="#d1e6a1"><div align="center">Telepon Penerima</div></td>
	
  </tr>
<?php
$i=0;
	$sql=mysql_query("select * from blangko"); 
	while($row=mysql_fetch_array($sql)){
if($i==0){
$warna="#ffffff";
$i=1;
}
else{
$warna="#d1e6a1";
$i=0;
}
echo"<tr bgcolor=$warna><td>$row[no_resi]</td>
         <td>$row[nama_pengirim]</td>
         <td>$row[alamat_pengirim]</td>
         <td>$row[telepon_pengirim]</td>
		 <td>$row[nama_penerima]</td>
		 <td>$row[alamat_penerima]</td>
		 <td>$row[telepon_penerima]</td>
		</tr>
		";
		}
		?>
</table>
  </div>
</form>
</body>
</html>
