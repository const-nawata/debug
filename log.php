<?php

function log_message($level, $message, $filepath='logs/api11.log' ){
	if( !$fp = fopen(_log_path, 'ab') ){
		return FALSE;
	}

	$level	= strtoupper($level);
	$message = $level.' --> '.date('Y-m-d H:i:s')."\n".$message."\n";

	flock($fp, LOCK_EX);
	fwrite($fp, "\n".$message);
	flock($fp, LOCK_UN);
	fclose($fp);

	return true;
}
