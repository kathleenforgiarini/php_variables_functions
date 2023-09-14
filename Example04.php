<?php

/*
 Subject: Using functions
 Authors: Kathleen Forgiarini
 Date of creation: Sept 14, 2023
 Dates of update:
 This code shows you how to create functions with parameters by reference
 
 */

$nb1 = 20;
$nb2 = 30;
$sum = 0;
$mult = 0;

calculate ($nb1, $nb2, $sum, $mult);

echo "The sum of $nb1 and $nb2 is $sum <br/>";
echo "The multiplication of $nb1 and $nb2 is $mult <br/>";


function calculate ($nbr1, $nbr2, &$add, &$mul) {
    $add = $nbr1 + $nbr2;
    $mul = $nbr1 * $nbr2;
}