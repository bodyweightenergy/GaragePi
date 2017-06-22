<?php
	$command = escapeshellcmd('sudo /home/pi/html/garage/read_input');
	$output = shell_exec($command);
	echo $output;
?>