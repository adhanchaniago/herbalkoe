<?php
	session_start();
	if(empty($_SESSION['user'])){
		echo"<script>
				document.location='login.php';
			</script>";
	}
	include "koneksi.php";
?>
<body>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="../nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
</script>
</head>
<link rel="stylesheet" href="style.css" type="text/css" />
<div id="wrapper">
	<div id="bgmenu">
    	<div id="menu"><a href="index.php">Edit Halaman Utama</a></div>
        <div id="menu"><a href="index.php?p=edit-text">Edit Text Berjalan</a></div>
        <div id="menu"><a href="index.php?p=tentang-kami">Edit Tentang Kami</a></div>
        <div id="menu"><a href="index.php?p=produk">Edit Produk</a></div>
 		<div id="menu"><a href="index.php?p=hubungi-kami">Edit Hubungi Kami</a></div>
        <div id="menu"><a href="index.php?p=testimoni">Edit Testimonials</a></div>      
        <div id="menu"><a href="index.php?p=edit-menu">Edit Menu</a></div>  
        <div id="menu"><a href="index.php?p=edit-lokasi">Edit Lokasi</a></div>
        <div id="menu"><a href="index.php?p=edit-galeri">Edit Galeri</a></div>			 
        <div id="menu"><a href="index.php?p=edit-konten-kanan">Edit Content Kanan</a></div>
		<div id="menu"><a href="index.php?p=ganti-password">Ganti Password</a></div>
		<div id="menu"><a href="logout.php">Logout</a></div>
    </div>
    <div id="header"></div>
    <div id="clear"></div>
    <div id="isi">
        <div id="left"><?php include "content.php"; ?></div>
   	</div> 
    <div id="clear"></div>
</div>

</body>