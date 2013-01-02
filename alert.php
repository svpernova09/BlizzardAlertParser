<?php
$wow = "http://launcher.worldofwarcraft.com/alert";
if($wow_data = file_get_contents($wow)){
	$wow_data = trim($wow_data);
	echo "<strong>WoW:</strong> $wow_data<br />";
} else {
	echo "WoW: No data to echo<br />";
}
$d3 = "http://us.launcher.battle.net/service/d3/alert/en-us";
if($d3_data = file_get_contents($d3)){
	$d3_data = trim($d3_data);
	echo "<strong>DIII:</strong> $d3_data<br />";
} else {
	echo "DIII: No data to echo<br />";
}
$sc2 = "http://us.launcher.battle.net/service/s2/alert/en-us";
if($sc2_data = file_get_contents($sc2)){
	$sc2_data = trim($sc2_data);
	echo "<strong>SC2:</strong> $sc2_data<br />";
} else {
	echo "SC2: No data to echo<br />";
}
?>