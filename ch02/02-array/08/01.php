<?php 

// array_pop($array) : loai bo phan tu cuoi cung cua mang. Ham tra ve phan tu cuoi cung da duoc loai bo 
// array_shift($array): loai bo phan tu dau tien cua mang. Ham tra ve phan tu dau tien da duoc loai bo. 
$course = array("PHP","Joombla", "Laravel", "Zend Framework", "jQuery");

echo "<pre>";
print_r($course);
echo "</pre>";
//xoa phan tu bat ki 

// xoa phan tu thu  0 
unset($course[0]);
// xoa toan bo mang 
unset($course);

echo "<pre>";
print_r($course);
echo "</pre>";