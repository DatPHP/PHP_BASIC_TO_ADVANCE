<?php 
//Quan ly thong tin sinh vien
//SV1 name, sex, scores

//cach 1 : khai bao mang da chieu 

$students = array();
$students["SV01"] = array("name" => "Petter", "sex" => 1, "scores" => array(1,2,3));
$students["SV02"] = array("name" => "John", "sex" => 1, "scores" => array(4,5,6));
$students["SV03"] = array("name" => "Merry", "sex" => 0, "scores" => array(7,8,9));

echo "<pre>";
print_r($students);
echo "</pre>";
