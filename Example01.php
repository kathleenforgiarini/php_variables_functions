<?php

/*
 Subject: Using functions
 Authors: Kathleen Forgiarini
 Date of creation: Sept 14, 2023
 Dates of update:
 This code shows you how to use functions
 
 */

$name = "David";
$salary = 2300.5;
$age = 30;

if (empty(is_float($name)))
echo "The variable $name is not float </br>";

if (empty(is_float($salary)))
    echo "The variable $salary is not float </br>";
else
{
    echo "The variable $salary is float </br>";
    echo "The variable of true is " . is_float($salary) . "</br>";   
}

