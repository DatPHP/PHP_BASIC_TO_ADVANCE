<?php 
 $course = array();
 $course[] = "php";
 $course[] = "Zend Framework";
 $course[] = "Laravel";
 $course[] = "Symfony";


$lenght = count($course);
echo  "Mang co do dai la: ".$lenght;
echo "</br>";

//check lengh array 
//way 1

// In phan tu mang 
echo "</br>";
echo "<pre>"; //mang in ra co chieu rong co dinh khi dung pre 
print_r($course);
echo "<pre>";

echo "</br>";
if($lenght > 0)
{
    echo "Khong la mang rong";
}
else
{
    echo "Mang rong";
}

//way 2 
echo "</br>";
if(!empty($lenght))
{
    echo "Khong la mang rong";
}
else
{
    echo "Mang rong";
}