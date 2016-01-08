<style type="text/css">
<!--
body {
	background-image: url();
}
-->
</style><?php
mysql_connect("localhost","root","");
mysql_select_db("arb");
$id_petugas=$_POST['id_petugas'];
$nama_petugas=$_POST['nama_petugas'];
$alamat_petugas=$_POST['alamat_petugas'];
$telepon_petugas=$_POST['telepon_petugas'];
$tempat=$_FILES['foto_petugas']['tmp_name'];
$nama_file=$_FILES['foto_petugas']['name'];
$path=pathinfo($_SERVER['PHP_SELF']);
$lokasi=$path['dirname'].'/foto_petugas/'.$nama_file;
if(move_uploaded_file($tempat,$_SERVER['DOCUMENT_ROOT'].$lokasi));
{
$sql=mysql_query("insert into petugas values('$id_petugas','$nama_petugas','$alamat_petugas','$telepon_petugas','$nama_file')");
if($sql)
{
?>
<script>
alert("Anda Telah Terdaftar");
document.location="admin.php?page=Data_petugas";
</script>
<?php
}
else
{
?>
<script>
alert("Gagal Mendaftar!!");
document.location="admin.php?page=Petugas";
</script>
<?php
}
}
?>
