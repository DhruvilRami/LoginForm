<?php
	echo "<table border='1'>";
	for($i=0;$i<1000;$i++){
		echo "<tr>";
		if($i%2==0){
			echo "<td bgcolor='red'>$i</td>";
		}else{
			echo "<td bfcolor='green'>$i</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>