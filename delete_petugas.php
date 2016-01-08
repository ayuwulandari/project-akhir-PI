<?php
include"koneksi.php";
if(isset($_GET['id_petugas'])){
$id_petugas=$_GET['id_petugas'];
$ambil=mysql_query("select * from petugas where id_petugas='$id_petugas'");
$row=mysql_fetch_array($ambil);
$sql=mysql_query("delete from petugas where id_petugas='$id_petugas'");
if(sql);
?> 
<script>
alert ('data sukses dihapus');
document.location='home_admin.php?page=Tampil_petugas';
</script>
<?php
} else {
?>
<script>
alert ('data gagal dihapus');
document.location='home_admin.php?page=Tampil_petugas';
</script>
<?php
}
?>
