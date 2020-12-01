<?php 


$course = array(3,7,8,4,2,5,9);

echo "<pre>";
print_r($course);
echo "</pre>";


////array_sum, min, max, count of array 

$sum = array_sum($course);
$lengh = count($course);
$max = max($course);
$min = min($course);

echo "Tong: ".$sum. "</br>";
echo "Trung binh: ".$sum/$lengh. "</br>";
echo "Max: ".$max. "</br>";
echo "Min: ".$min. "</br>";




