<?php
	$pin = (int)htmlspecialchars($_GET["pin"]);
	$state = (int)htmlspecialchars($_GET["state"]);
	echo "pin=" . $pin . "<br>";
	echo "state=" . $state . "<br>";
	if (($pin == 1 || $pin == 2) && ($state == 0 || $state == 1))
	{
		echo "valid parameters." . "<br>";
	$command = escapeshellcmd('sudo /home/pi/html/garage/set_output ' . $pin . ' ' . $state);
	echo "executing: " . $command . "<br>";
	$output = shell_exec($command);
	echo $output;
	} else {
		echo "Bad parameters." . "<br>";
	}
?>