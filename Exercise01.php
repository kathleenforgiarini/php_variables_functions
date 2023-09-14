<?php

/*
 * Subject: Exercise 01
 * Authors: Kathleen Forgiarini
 * Date of creation: Sept 14, 2023
 * Dates of update:
 * Using environment variables, libraries and functions
 *
 */
include 'library_exercise01.php';
displayInfos();

function displayInfos()
{
    global $opName;
    global $phpVersion;
    
    echo "<!DOCTYPE html> <html> <body style='border: 3px solid red; padding: 10px'>
            <p>Operating system :  $opName </p>
            <p>Php version : $phpVersion </p>
            <p>Client IP Address : " . $GLOBALS["CLIENT_IP"] . "</p>
            <p>Server IP Address : " . $GLOBALS["SERVER_IP"] . "</p>
            <p>Browser language : " . $GLOBALS["BROWSER_LANG"] . "</p>
            <p>Operating system home directory : " . $GLOBALS["OS_HOME_DIR"] . "</p>
            <p>Php home directory : " . $GLOBALS["PHP_HOME_DIR"] . "</p>
          </body></html>
";
}

