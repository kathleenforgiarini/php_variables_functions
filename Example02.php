<?php

/*
 Subject: Using environment variables and global variables
 Authors: Kathleen Forgiarini
 Date of creation: Sept 14, 2023
 Dates of update:
 This code shows you how to use environment variables and global variables
 
 */

$serverName = $_SERVER["SERVER_NAME"];
echo "The server name is $serverName <br/>";

$documentRoot = $_SERVER["DOCUMENT_ROOT"];
echo "The root folder of the server is $documentRoot <br/>";

$ipAddress = $_SERVER["REMOTE_ADDR"];
echo "The IP Address of the client is $ipAddress <br/>";

$phpVersion = PHP_VERSION;
echo "The php version is $phpVersion <br/>";

$phpOS = PHP_OS;
echo "The Operating System is $phpOS <br/>";