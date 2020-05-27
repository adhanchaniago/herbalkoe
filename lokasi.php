<h2>LOKASI</h2><br>
<?php
	$r=mysql_fetch_array(mysql_query("SELECT lokasi FROM info"));
	echo $r[0];
?>