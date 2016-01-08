<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 30px;
	font-weight: bold;
}
.style2 {
	color: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
}
.style4 {color: #000000; font-family: Arial, Helvetica, sans-serif; font-size: 24; }
.style5 {color: #000000}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>
<p align="center">&nbsp;</p>
<form action="simpan_penerima2.php" method="post" enctype="multipart/form-data">
  <p align="center" class="style1">BLANGKO PENGIRIMAN </p>
  <p align="center" class="style1">&nbsp;</p>
  <table width="909" height="448" border="0" align="center" bgcolor="#d1e6a1">
    <tr>
      <td width="102" height="26" class="style4">No Resi </td>
      <td width="110"><label>
      <input name="no_resi" type="text" id="no_resi" size="15" />
      </label></td>
      <td width="66" height="26" class="style4">&nbsp;</td>
      <td width="113">&nbsp;</td>
      <td width="138" height="26" class="style4">Tanggal Pengiriman </td>
	  <td width="120"><input name="tanggal_pengiriman" type="text" id="tanggal_pengirima" size="15"/></td>
      <td width="95">YYYY-MM- DD</td>
      <td width="131">&nbsp;</td>
    </tr>
    <tr>
      <td height="26" class="style4">Nama Pengirim </td>
      <td><input name="nama_pengirim" type="text" id="nama_pengirim" size="15" /></td>
      <td height="26" class="style4">&nbsp;</td>
      <td>&nbsp;</td>
      <td height="26" class="style4">Nama Penerima </td>
      <td><input name="nama_penerima" type="text" id="nama_penerima" size="15" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="26" class="style4">Alamat </td>
      <td><label>
        <textarea name="alamat_pengirim" cols="15" id="alamat_pengirim"></textarea>
      </label></td>
      <td height="26" class="style4">&nbsp;</td>
      <td>&nbsp;</td>
      <td height="26" class="style4">Alamat </td>
      <td><label>
        <textarea name="alamat_penerima" cols="15" id="alamat_penerima"></textarea>
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="40" class="style4">Telepon</td>
      <td><label></label>
          <label>
          <input name="telepon_pengirim" type="text" id="telepon_pengirim" size="15" />
        </label></td>
      <td height="40" class="style4">&nbsp;</td>
      <td>&nbsp;</td>
      <td height="40" class="style4">Telepon</td>
      <td><label></label>
          <label>
          <input name="telepon_penerima" type="text" id="telepon_penerima" size="15" />
        </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="39" class="style4">Negara</td>
      <td><label>
        <input name="negara_pengirim" type="text" id="negara_pengirim" size="15" />
      </label></td>
      <td height="39" class="style4">Kota</td>
      <td><input name="kota_pengirim" type="text" id="kota_pengirim" size="15" /></td>
      <td height="39" class="style4">Negara</td>
      <td><label>
        <input name="negara_penerima" type="text" id="negara_penerima" size="15" />
      </label></td>
      <td height="39" class="style4">Kota</td>
      <td><input name="kota_penerima" type="text" id="kota_penerima" size="15" /></td>
    </tr>
    <tr>
      <td height="39" class="style4">Provinsi</td>
      <td><input name="provinsi_pengirim" type="text" id="provinsi_pengirim" size="15" /></td>
      <td height="39" class="style4">Kode Pos </td>
      <td><input name="kodepos_pengirim" type="text" id="kodepos_pengirim" size="15" /></td>
      <td height="39" class="style4">Provinsi</td>
      <td><input name="provinsi_penerima" type="text" id="provinsi_penerima" size="15" /></td>
      <td height="39" class="style4">Kode Pos </td>
      <td><input name="kodepos_penerima" type="text" id="kodepos_penerima" size="15" /></td>
    </tr>
    <tr>
      <td height="21" class="style4">&nbsp;</td>
      <td>&nbsp;</td>
      <td height="21" class="style4">&nbsp;</td>
      <td>&nbsp;</td>
      <td height="21" class="style4">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="39" class="style4">Paket</td>
      <td><select name="paket" id="paket" onchange="MM_jumpMenu('parent',this,0)">
        <option selected="selected">Reguler</option>
        <option>Oke</option>
      </select></td>
      <td height="39" class="style4">&nbsp;</td>
      <td>&nbsp;</td>
      <td class="style4">&nbsp;</td>
      <td>&nbsp;</td>
      <td class="style4">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="style4">Isi Kiriman </td>
      <td class="style4"><label>
        <input name="isi_kiriman" type="text" size="15" />
      </label></td>
      <td class="style4">Harga</td>
      <td><input name="harga_paket" type="text" size="15" /></td>
      <td class="style4">Panjang</td>
      <td><input name="panjang_paket" type="text" size="20" /></td>
      <td class="style4">Tinggi</td>
      <td><input name="tinggi_paket" type="text" size="20" /></td>
    </tr>
    <tr>
      <td class="style4">Banyak</td>
      <td class="style4"><input name="banyak_kiriman" type="text" size="15" /></td>
      <td class="style4">Berat</td>
      <td><input name="berat_paket" type="text" size="15" /></td>
      <td class="style4">Lebar</td>
      <td><input name="lebar_paket" type="text" size="20" /></td>
      <td class="style4">Jenis</td>
      <td><input name="jenis_paket" type="text" size="20" /></td>
    </tr>
    <tr>
      <td class="style4">Total Bayar </td>
      <td class="style4"><input name="total_harga" type="text" size="15" /></td>
      <td height="39" class="style4">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr class="style2">
      <td height="35" colspan="8"><span class="style5">
        <label><div align="center" class="style5">
          <input name="simpan" type="submit" id="simpan" value="Simpan" />
          <input type="reset" name="Reset" value="Batal" />
        </div></label></span></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>

</body>
</html>
