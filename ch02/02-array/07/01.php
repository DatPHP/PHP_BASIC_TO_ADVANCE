<?php 

$course = array("PHP","Joombla", "Laravel", "Zend Framework", "jQuery","Joombla","PHP");

echo "<pre>";
print_r($course);
echo "</pre>";
//loai bo phan tu trung nhau  ham array_unique
echo $newarray  = array_unique($course);

echo "<pre>";
print_r($newarray);
echo "</pre>";