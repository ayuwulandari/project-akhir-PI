<?php
include"koneksi.php";
if(isset($_GET['id_petugas'])){
$id_petugas_baru=$_GET['id_petugas'];
$sql=mysql_query("select * from petugas where id_petugas='$id_petugas_baru'");
$row=mysql_fetch_array($sql);
}
if (isset($_POST['edit']))
{
$id_petugas=$_POST['id_petugas'];
$nama_petugas=$_POST['nama_petugas'];
$alamat_petugas=$_POST['alamat_petugas'];
$telepon_petugas=$_POST['telepon_petugas'];
$cek_baru=$_POST['cek'];
$tempat=$_FILES['petugas_foto'][tmp_name];
$nama_file=$_FILES['petugas_foto']['name'];
$path=pathinfo($_SERVER['PHP_SELF']);
$lokasi=$path['dirname'].'/petugas_foto/'.$nama_file;
$tampil=mysql_query("select * from petugas where id_petugas='$id_petugas_baru'");
$row=mysql_fetch_array($tampil);
$folder="petugas_foto/";
$filename=$row[petugas_foto];
$hapus=$folder.$filename;
if($cek_baru =='checkbox'){
if(move_uploaded_file($tempat,$_SERVER['DOCUMENT_ROOT'].$lokasi))
{
unlink($hapus);
$update=mysql_query("update petugas set nama_petugas='$nama_petugas',alamat_petugas='$alamat_petugas',telepon_petugas='$telepon_petugas',petugas_foto='$nama_file' where id_petugas='$id_petugas'")
;
if($update)
{
?>
<script>
alert('Berhasil Anda Edit');
document.location='admin.php?page=Tampil_anggota';
</script>
<?
}
else{
?>
<script>
alert('Gagal Anda Edit');
document.location='admin.php?page=Tampil_anggota';
</script>
<?
}
}                     
}

else {
$update=mysql_query("update petugas set nama_petugas='$nama_petugas',alamat_petugas='$alamat_petugas',telepon_petugas='$telepon_petugas',petugas_foto='$nama_file' where id_petugas='$id_petugas'")
;
if($update)
{
?>
<script>
alert('Berhasil Anda Edit');
document.location='admin.php?page=Tampil_anggota';
</script>
<?
}
else{
?>
<script>
alert('Gagal Anda Edit');
document.location='admin.php?page=Tampil_anggota';
</script>
<?
}
}}
?>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style3 {
	color: #d1e6a1;
	font-weight: bold;
	font-size: 24px;
}
-->
</style>

<form action="edit_petugas.php"method="post" enctype="multipart/form-data" name="edit">
 <div align="center"><span class="style3">Silahkan Memperbaiki Data
   </span>
   <table bgcolor="#d1e6a1" bordercolor="#000000"table width="401" border="2">
  <tr>
  <td width="152" class="style1">Kode</td>
  <td width="231"><input name="id_petugas"type="text" id="id_petugas" value="<?php echo"$row[id_petugas]";?>" size="10" maxlength="5" readonly/></td>
  </tr>
  <tr>
  <td class="style1">Nama</td>
  <td><input name="nama_petugas" value="<?php echo"$row[nama_petugas]";?>"type="text" size="35" maxlength="50" /></td>
  </tr>
  <tr>
  <td class="style1">Alamat</td>
  <td><textarea name="alamat_petugas" cols="32" rows="5" id="alamat_petugas"><?php echo"$row[alamat_petugas]";?></textarea></td>
  </tr>
  <tr>
    <td class="style1">Telepon</td>
    <td><input name="telepon_petugas" value="<?php echo"$row[telepon_petugas]";?>"type="text" size="35" maxlength="50" /></td>
  </tr>
    <tr class="style1">  
      <td>Foto</td>
        <td><input name="petugas_foto" type="file" id="petugas_foto" value="<?php echo"$row[petugas_foto]";?>">
  <label>
  <input name="cek" type="checkbox" id="checkbox" value="checkbox" />
  klik disini untuk update foto </label></td>
  <tr>
  <td height="52" colspan="2">
    <div align="center" class="style1">
      <input name="edit" type="submit" value="Edit" />
      <input name="batal" type="reset" value="Batal" />
      </div></td>
  </tr>
   </table>
 </div>
