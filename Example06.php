<?php

/*
 Subject: Using global variables
 Authors: Kathleen Forgiarini
 Date of creation: Sept 14, 2023
 Dates of update:
 This code shows you how to use global variables in other pages
 
 */

include 'library1.php';

displayAppName();
displayServerName();

echo "The server name is $serverName <br/>";


function displayAppName(){
    echo "The application name is : " . $GLOBALS["APP_NAME"] . "<br/>";
}


function displayServerName(){
    global $serverName;
    echo "The server name is $serverName <br/>";
}