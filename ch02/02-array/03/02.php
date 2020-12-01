<?php 
//cach 2 khai bao mang khong lien tuc 
$course = array("php"=> "php", "zend" => "Zend Framework", "laravel" => "Laravel", "symfony" => "Symfony", 1 => "Item 1", 2 => "Item 2");
echo"<pre>";
print_r($course);
echo"</pre>";


echo $course[1];