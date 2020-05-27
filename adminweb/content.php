<?php
	if($_GET[p]==""){//Beranda
		include "editberanda.php";
	}elseif($_GET[p]=="artikel"){//Artikel
		include "editartikel.php";
	}elseif($_GET[p]=="produk"){//Produk
		include "editproduk.php";
	}elseif($_GET[p]=="cara-order"){//Cara Order
		include "editcaraorder.php";
	}elseif($_GET[p]=="list-belanja"){//Formulir Order
		include "orderan.php";
	}elseif($_GET[p]=="alamat"){//Alamat
		include "editalamat.php";
	}elseif($_GET[p]=="testimoni"){//Testimoni
		include "edittestimoni.php";
	}elseif($_GET[p]=="tentang-kami"){//Tentang Kami
		include "edittentangkami.php";
	}elseif($_GET[p]=="hubungi-kami"){//HUbungi Kami
		include "edithubungikami.php";
	}elseif($_GET[p]=="edit-menu"){//HUbungi Kami
		include "editmenu.php";
	}elseif($_GET[p]=="edit-lokasi"){//HUbungi Kami
		include "editlokasi.php";
	}elseif($_GET[p]=="edit-galeri"){//HUbungi Kami
		include "editgaleri.php";
	}elseif($_GET[p]=="edit-konten-kanan"){//HUbungi Kami
		include "editkanan.php";
	}elseif($_GET[p]=="edit-text"){//HUbungi Kami
		include "editinfo.php";
	}elseif($_GET[p]=="ganti-password"){//Alamat
		include "gantipassword.php";
	}else{//404 Page not found
		echo"";
	}
?>