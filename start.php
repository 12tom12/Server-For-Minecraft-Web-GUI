<?php
	if(!empty($_GET['ram']) && ctype_digit($_GET['ram'])) {
		$ram = trim($_GET['ram']);
	} else {
		$ram = '1500';
	}
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
		echo shell_exec('java -Xmx'.$ram.'M -jar server.jar nogui');
	} else {
		echo shell_exec('java -Xmx'.$ram.'M -jar server.jar nogui');
	}
?>
