<?php
$sentence = "Ni talar bra latin";

$cleared = str_replace(" ","", $sentence);
$cleared = strtolower($cleared);

$reversed = strrev($cleared);

if($cleared=== $reversed){
    echo "Palindrome";
}



 