<table border="0">
  <tr>
  	<center><h3>LAYANAN ONLINE</h3></center>
  	<td align="center">
    	<?php
        	$q=mysql_query("SELECT * FROM ym");
			while($r=mysql_fetch_array($q)){
				echo "<a href=ymsgr:sendim?$r[nama] border=0><img src=http://opi.yahoo.com/online?u=$r[nama]&t=2></a>";
			}
		?>
     	<br><p>
	<tr>
		<td align="center"><h3>ARTIKEL TERBARU</h3>
    <tr> 
   		<td><?php include "rss.php"; ?>
    <tr>
    	<td align="center">
		<?php 
			$q=mysql_query("SELECT banner FROM info");
			$r=mysql_fetch_array($q);
			echo $r[0];
		?>
    <tr>
    	<td align="center"><h3>Gabung bersama kami</h3>
    <tr>
    	<td align="center"><img src="images/fb.png" width="50" /><a href="https://twitter.com/#!/herbalkoe" target="_blank"><img src="images/twitter.png" width="50" /></a>
    <tr>
    	<td align="center">
            <h3>Developed by :</h3>
            <img src="images/logo.JPG" width="250">
  <tr>
    <td><img src="images/Duplicate-State_13.png" width="330"></td>
  </tr>
</table>
