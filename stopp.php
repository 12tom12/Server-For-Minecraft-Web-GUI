<?php
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
		echo shell_exec('taskkill /F /IM java.exe');
	} else {
		echo shell_exec('sudo killall java')
	}
?>
