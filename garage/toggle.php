<?php
	$command = escapeshellcmd("sudo /home/pi/html/garage/toggle_switch");
	echo "executing: \"" . $command . "\"\n";
	$output = shell_exec($command);
	echo $output;
?>