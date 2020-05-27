<?php
	$q=mysql_query("SELECT * FROM menu ORDER BY posisi");
	while($r=mysql_fetch_array($q)){
		if($r['target']==0){
			echo "<div id=menu><a href=$r[link]>$r[nama_menu]</a></div>";
		}else{
			echo "<div id=menu><a href=$r[link] target=blank>$r[nama_menu]</a></div>";
		}
		
	}
?>