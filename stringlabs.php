<?php
$x = "hej hej jag heter Stefan vad heter du?";

$varA = strtolower($x);
echo $varA;


$varB = strtoupper($x);
echo $varB;

$varC = ucfirst($x);
echo $varC;

$varD = ucwords($x);
echo $varD;


$lab2 = "08:23:07";
$parts = explode(":", $lab2);
for ($i = 0; $i < count($parts); $i++){
    echo $parts[$i] ;


}






