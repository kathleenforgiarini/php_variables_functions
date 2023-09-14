<?php

$opName = PHP_OS;
$phpVersion = PHP_VERSION;
$clientIpAddress = $_SERVER["REMOTE_ADDR"];
$serverIpAddress = $_SERVER["SERVER_ADDR"];
$browserLanguage = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
$osHomeDirectory = $_SERVER["PATH"];
$phpHomeDirectory = $_SERVER["DOCUMENT_ROOT"];


$GLOBALS["CLIENT_IP"] = $clientIpAddress;
$GLOBALS["SERVER_IP"] = $serverIpAddress;
$GLOBALS["BROWSER_LANG"] = $browserLanguage;
$GLOBALS["OS_HOME_DIR"] = $osHomeDirectory;
$GLOBALS["PHP_HOME_DIR"] = $phpHomeDirectory;