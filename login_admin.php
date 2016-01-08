<?php 
include 'koneksi.php';
				
		//Untuk menampilkan total row
		$rs_all = mysql_query("select count(*) as total_all from admin") or die(mysql_error());				   
list($all) = mysql_fetch_row($rs_all);
        ?>
<style type="text/css">
<!--
.style1 {
	font-family: Chiller;
	color: #9900FF;
	font-size: 36px;
	font-style: italic;
}
.style4 {font-family: Chiller; color: #9900FF; font-size: 24px; font-style: italic; }
.style5 {font-size: 24px}
.style6 {font-family: Chiller}
.style7 {color: #9900FF; font-size: 24px; font-family: Chiller;}
.style8 {font-size: 36px}
.style9 {color: #FFFFFF}
.style10 {font-size: 24px; font-style: italic; font-family: Chiller;}
-->
</style>
<form name="form1" method="post" action="aksi_admin.php">
  <p align="center" class="style1"></p>
  <table width="435" height="257" border="10" align="center" bordercolor="#000000" bgcolor="#FFFFFF">
    <tr>
      <td bordercolor="#d1e6a1" bgcolor="#d1e6a1"><p align="center"><span class="style7"><span class="style8"><span class="style9"><blink><strong>&quot;Silahkan Masuk Dahulu&quot;</strong></blink></span></span></span></p>
        <p class="style4"><span class="style9">Username<span class="style10">
        <label>
        
        :
        <input name="username" type="text" id="username" size="25" maxlength="12">
        <br>
        <br>
        Password  
        :
        <input name="password" type="password" id="password" size="25" maxlength="12">
        <br>
        </label>
        </span></span><span class="style4"><label><br>
        </label>
        </span>
        <span class="style5">
        <label>    </label>
          <span class="style6">
          <label>    </label>
          </span></span>        
        <span class="style5">
        <label></label>
        </span></p>
        <label></label>
      <div align="center" class="style9"><span class="style4">
        <input name="Login" type="submit" class="style9" id="Login" value="Login" />
      </span></div></td>
    </tr>
  </table>
  <div align="center"></div>
</form>
