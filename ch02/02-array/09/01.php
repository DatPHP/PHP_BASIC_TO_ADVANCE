<?php 

// array_pop($array) : loai bo phan tu cuoi cung cua mang. Ham tra ve phan tu cuoi cung da duoc loai bo 
// array_shift($array): loai bo phan tu dau tien cua mang. Ham tra ve phan tu dau tien da duoc loai bo. 
$course = array("PHP","Joombla", "Laravel", "Zend Framework", "jQuery");

echo "<pre>";
print_r($course);
echo "</pre>";
//xoa phan tu bat ki 

//Ham Array_push : them phan tu vao cuoi mang . Tra ve so phan tu cua mang.

$length = array_push($course,'HTML','CSS');

echo $length;
// Ham Array_unshift : them phan tu vao dau mang . TRa ve so phan tu cua mang.
// phan biet voi ham array_shift: xoa phan tu dau tien cua mang 
echo "<pre>";
print_r($course);
echo "</pre>";

$length2 = array_unshift($course,'Bootstrap 3','Bootstrap 4');

echo $length2;

echo "<pre>";
print_r($course);
echo "</pre>";

//array_reverse // dao nguoc vi tri phan tu cua mang 
