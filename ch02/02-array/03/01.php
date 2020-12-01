<?php 
// cach 1 khai bao mang khong lien tuc 
 $course = array();
 $course["php"] = "php"; //key: php
 $course["zend"] = "Zend Framework";  //key: zend
 $course["laravel"] = "Laravel";  //key: laravel
 $course["symfony"] = "Symfony";  //key: symfony
 $course[] = "Item 1";  // key: 1
 $course[] = "Item 2";  // key: 2 
echo"<pre>";
print_r($course);
echo"</pre>";


echo $course[1];