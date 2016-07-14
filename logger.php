<?php

function logMessage($logLevel, $message)
{
	$date = date("Y-m-d");
	$time = date("H:i:s");
	$filename = "log-$date.log";
	$handle = fopen($filename, 'a');
	$formattedMessage = "$date $time [$logLevel] $message\n";
	fwrite($handle, $formattedMessage);
	fclose($handle);
}
function logInfo ($logMessage) {
	logMessage("INFO", $logMessage);
}
function logError ($logMessage) {	
	logMessage("ERROR", $logMessage);
}

logInfo("This is an info message.");
logError("This is an info message.");
