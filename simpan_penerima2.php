<style type="text/css">
<!--
body {
	background-image: url();
}
-->
</style><?php
mysql_connect("localhost","root","");
mysql_select_db("arb");
$no_resi=$_POST['no_resi'];
$nama_pengirim=$_POST['nama_pengirim'];
$alamat_pengirim=$_POST['alamat_pengirim'];
$telepon_pengirim=$_POST['telepon_pengirim'];
$negara_pengirim=$_POST['negara_pengirim'];
$provinsi_pengirim=$_POST['provinsi_pengirim'];
$kota_pengirim=$_POST['kota_pengirim'];
$kodepos_pengirim=$_POST['kodepos_pengirim'];
$tanggal_pengiriman=$_POST['tanggal_pengiriman'];
$nama_penerima=$_POST['nama_penerima'];
$alamat_penerima=$_POST['alamat_penerima'];
$telepon_penerima=$_POST['telepon_penerima'];
$negara_penerima=$_POST['negara_penerima'];
$provinsi_penerima=$_POST['provinsi_penerima'];
$kota_penerima=$_POST['kota_penerima'];
$kodepos_penerima=$_POST['kodepos_penerima'];
$paket=$_POST['paket'];
$isi_kiriman=$_POST['isi_kiriman'];
$banyak_kiriman=$_POST['banyak_kiriman'];
$harga_paket=$_POST['harga_paket'];
$berat_paket=$_POST['berat_paket'];
$panjang_paket=$_POST['panjang_paket'];
$lebar_paket=$_POST['lebar_paket'];
$tinggi_paket=$_POST['tinggi_paket'];
$jenis_paket=$_POST['jenis_paket'];
$total_harga=$_POST['total_harga'];

$sql=mysql_query("insert into blangko values('$no_resi','$nama_pengirim','$alamat_pengirim','$telepon_pengirim','$negara_pengirim','$provinsi_pengirim','$kota_pengirim','$kodepos_pengirim','$tanggal_pengiriman','$nama_penerima','$alamat_penerima','$telepon_penerima','$negara_penerima','$provinsi_penerima','$kota_penerima','$kodepos_penerima','$paket','$isi_kiriman','$banyak_kiriman','$harga_paket','$berat_paket','$panjang_paket','$lebar_paket','$tinggi_paket','$jenis_paket','$total_harga')");
if($sql)
{
?>
<script>
alert("Anda Telah Terdaftar");
document.location="admin.php?page=Data_pengiriman";
</script>
<?php
}
else
{
?>
<script>
alert("Gagal Mendaftar!!");
document.location="admin.php?page=Blangko";
</script>
<?php
}
?>
