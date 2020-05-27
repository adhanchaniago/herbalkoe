<h2>EDIT BERANDA</h2>
<?php
	include "../crop.php";
	if($_POST['pratinjau']){
		echo $_POST['isi'];
	}elseif($_POST['simpan']){
		mysql_query("UPDATE info SET beranda='$_POST[isi]'");
		//upload
		
				$namafile_tmp = $_FILES['berkas']['tmp_name'];
				$folder="image/";
				$a=$_FILES['berkas']['name'];
				$b=str_replace(" ", "-", $a) ; 
				$newname="../".$folder.$b;
				if(ereg(".jpg",$_FILES[berkas][name])){
					$type=".jpg";
				}elseif(ereg(".gif",$_FILES[berkas][name])){
					$type=".gif";
				}elseif(ereg(".png",$_FILES[berkas][name])){
					$type=".png";
				}
				
				
					$namabaru="../".$folder."beranda".$id.$type;
					$copied = copy($_FILES['berkas']['tmp_name'],$namabaru);
					if (!$copied) {
						echo '<h1>Upload Gagal!!</h1>';
						
					}else{
						$gambar="TehSirihMerah_produk_".$id.$type;
						$image = new SimpleImage();
						$namafile=$folder.$namabaru;
						$image->load($namabaru); // gambar yang diload
					}
	}
	
	$r=mysql_fetch_array(mysql_query("SELECT beranda FROM info"));
	
?>
<form method="post" action="" enctype="multipart/form-data">
<table border="0" align="center">
	<tr><td><textarea name="isi" id="txtarea" cols="70" rows="20"><?php echo $r[0];?></textarea>
    <tr><td align="center"><input type="file" name="berkas" id="berkas" />
    <tr><td align="center"><input name="simpan" type="submit" id="simpan" value="Simpan"/><input type="submit" value="Pratinjau" name="pratinjau" id="pratinjau"/><input name="reset" type="reset" id="reset" value="Ulang"/>
</table>
</form>