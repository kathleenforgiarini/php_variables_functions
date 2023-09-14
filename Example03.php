<?php

/*
 Subject: Using functions
 Authors: Kathleen Forgiarini
 Date of creation: Sept 14, 2023
 Dates of update:
 This code shows you how to create functions with parameters by value and by reference
 
 */

$nb1 = 100;
$nb2 = 50;
$add = addition($nb1, $nb2);
display($nb1, $nb2, $add);

/* The parameters of the function addition are defined by value */
function addition($nbr1, $nbr2){
    $sum = $nbr1 + $nbr2;
    return $sum;
}

function display ($nbr1, $nbr2, $sum){
    echo "The sum of $nbr1 and $nbr2 is $sum <br/>";
}