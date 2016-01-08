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
</head>

<body>
<p align="center">&nbsp;</p>
<form action="simpan_petugas.php" method="post" enctype="multipart/form-data">
  <p align="center" class="style1">DAFTAR PETUGAS</p>
  <p align="center" class="style1">&nbsp; </p>
  <table width="373" height="208" align="center" bgcolor="#d1e6a1">
    <tr>
      <td width="121" height="26" class="style4">ID petugas</td>
      <td width="218"><label>
        <input name="id_petugas" type="text" id="id_petugas" />
      </label></td>
    </tr>
    <tr>
      <td height="26" class="style4">Nama</td>
      <td><input name="nama_petugas" type="text" id="nama_petugas" /></td>
    </tr>
    <tr>
      <td height="26" class="style4">Alamat</td>
      <td><label>
      <textarea name="alamat_petugas" id="alamat_petugas"></textarea>
      </label></td>
    </tr>
    <tr>
      <td height="40" class="style4">Telepon</td>
      <td><label></label>
        <label>
        <input name="telepon_petugas" type="text" id="telepon_petugas" />
        </label></td>
    </tr>
    <tr>
      <td height="39" class="style4">Foto</td>
      <td><label>
      <input name="foto_petugas" type="file" id="foto_petugas" />
      </label></td>
    </tr>
    <tr class="style2">
      <td height="35" colspan="2"><span class="style5">
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
