<?php
$first_name = "Dat";
$last_name = "Nguyen Van";
$age = 24;

var_dump($age);
echo "<br>";
var_dump($first_name);
echo "<br>";

// get kieu du lieu 
echo gettype($first_name);

// set kieu du lieu 

$number = 12.34;
echo $number;
echo "<br>";
//echo (int)$number;

settype($number,"integer");
echo $number;
echo "<br>";
echo is_numeric($number); // kiem tra bien $first_name co phai kieu du lieu so hay ko ? 

// Hamg do 
define("PHP1","Hello Dat");
echo PHP1;

