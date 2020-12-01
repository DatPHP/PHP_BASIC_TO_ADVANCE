<?php 
//cach 2 khai bao mang khong lien tuc 
$course = array("php"=> "php", "zend" => "Zend Framework", "laravel" => "Laravel", "symfony" => "Symfony", 1 => "Item 1", 2 => "Item 2");
if(!empty($course))
{
    foreach($course as $key => $value)
    {
        echo $key.": ".$value."</br>";
    }
}
