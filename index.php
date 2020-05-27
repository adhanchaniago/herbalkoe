<?php
	session_start();
	$_SESSION['ip']=session_id();
	include "adminweb/koneksi.php";
	if($_POST['konfirmasi_belanja']){
		
		for($i=0;$i<$_SESSION['count']-1; $i++){
			if($_POST['jumlah'][$i]!=""){
				$nama_produk=$_POST['nama_produk'][$i];
				$jumlah=$_POST[jumlah][$i];
				$harga=$_POST[harga][$i];
				mysql_query("INSERT INTO temp VALUES('','$nama_produk','$jumlah','$harga','$_SESSION[ip]')");
			}
		}
		
	}else if($_POST['pesan']){
		echo "pesan";
	}
?>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="images/icon.jpg" />

		<meta http-equiv="Copyright" content="herbalkoe">

		<meta name="author" content="Herbakoe">

		<meta http-equiv="imagetoolbar" content="no">

		<meta name="language" content="Indonesia">

		<meta name="webcrawlers" content="all">

		<meta name="rating" content="general">

		<meta name="spiders" content="all">

		<meta name="robots" content="all" />

		<meta name="googlebot" content="index,follow" />

		<meta name="msnbot" content="index,follow" />

		<meta name="pagerank" content="10" />

		<meta name="revisit" content="1 days" />

		<meta name="revisit-after" content="1 days" />
<title>Herbalkoe</title>
</head>
<body>
<div id="wrapper">
	<div id="bgmenu">
        <?php include "menu.php"; ?>
    </div>
    <div id="header"></div>
    <div>
    	<table width="100%" cellpadding="0" cellspacing="0">
        	<tr height="15">
            	<td bgcolor="#ff6e01" width="30%">
                <td bgcolor="#6dcc10">
        </table>
    </div>
    <div id="clear"></div>
    <div id="info"><?php include "info.php";?></div>
    <div id="isi">
        <div id="left"><?php include "left.php"; ?></div>
        <div id="right"><?php include "right.php"; ?></div>
   	</div> 
    <div id="clear"></div>
    <div>
    	<table width="100%" cellpadding="0" cellspacing="0">
        	<tr height="15">
                <td bgcolor="#6dcc10">
                <td bgcolor="#ff6e01" width="30%">
        </table>
    </div>
    <div id="footer"><?php include "footer.php"; ?></div>
    
   	</div>
</div>

</body>