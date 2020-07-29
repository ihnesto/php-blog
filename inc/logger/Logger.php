<?php

class Logger {

    private $logFileName = '';
    private $fd = '';

    function __construct($logFileName) {
        $this->logFileName = $logFileName;
        $this->fd = fopen($logFileName, 'a');
    }

    function log($msg) {
        $logMsg = date(DATE_RFC1036) . ': ';
        $logMsg = $logMsg . $msg . "\n";
        fwrite($this->fd, $logMsg);
    }

    function __destruct() {
        fclose($this->fd);
    }
}