<?php
 $course = array("php","Zend Framework", "Laravel", "Symfony");

 echo "<pre>";
 print_r($course);
 echo "<pre>";
 //exit();
 // foreach danh cho mang PHP
foreach($course as $key => $value)
{
    echo $value. "<br>";
}