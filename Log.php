<?php

class Log
{
    public $filename;
    public function logMessage($logLevel, $message) {
        $date = date("Y-m-d");
        $time = date("H:i:s");
        $this->filename = "log-$date.log";
        $handle = fopen($this->filename, 'a');
        $formattedMessage = "$date $time [$logLevel] $message\n";
        fwrite($handle, $formattedMessage);
        fclose($handle);
    }
    public function info($logMessage) {
        $this->logMessage("INFO", $logMessage);
    }
    public function error($logMessage) {
        $this->logMessage("ERROR", $logMessage);
    }
}