<?php
	session_start();
	$_SESSION['ip']=session_id();
	include "adminweb/koneksi.php";
	if($_POST['pesan']){
		mysql_query("INSERT INTO temp VALUES('','$_POST[nama_produk]','$_POST[jumlah]','$_POST[harga]','$_SESSION[ip]')");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(images/daunjatuhkecil.png);
	background-color: #CCCCCC;
	margin-top: 25px;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onload="MM_preloadImages('images/rollover_03.png','images/rollover_04.png','images/rollover_05.png','images/rollover_06.png')">
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
    <td><table width="1024" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="images/Duplicate-State_01.gif" alt="a" width="1024" height="36" /></td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="10"><img src="images/Duplicate-State_02.gif" alt="b" width="10" height="28" /></td>
              <td width="127"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('home','','images/rollover_03.png',1)"><img src="images/Duplicate-State_03.gif" name="home" width="127" height="28" border="0" id="home" /></a></td>
              <td width="125"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('product','','images/rollover_04.png',1)"><img src="images/Duplicate-State_04.gif" name="product" width="125" height="28" border="0" id="product" /></a></td>
              <td width="125"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('article','','images/rollover_05.png',1)"><img src="images/Duplicate-State_05.gif" name="article" width="125" height="28" border="0" id="article" /></a></td>
              <td width="125"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('contact us','','images/rollover_06.png',1)"><img src="images/Duplicate-State_06.gif" name="contact us" width="125" height="28" border="0" id="contact us" /></a></td>
              <td><img src="images/Duplicate-State_07.gif" alt="g" width="512" height="28" /></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><img src="images/Duplicate-State_09.gif" alt="h" width="1024" height="226" /></td>
      </tr>
      <tr>
        <td><img src="images/Duplicate-State_10.gif" alt="i" width="1024" height="24" /></td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
            <tr>
              <td><div><?php include "left.php" ;?></div></td>
              <td width="371"><img src="images/Duplicate-State_13.png" alt="j" width="371" height="443" /></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><img src="images/Duplicate-State_14.gif" alt="k" width="1024" height="27" /></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
