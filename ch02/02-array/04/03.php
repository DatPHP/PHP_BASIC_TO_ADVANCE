<?php 
//Quan ly thong tin sinh vien
//SV1 name, sex, scores

//cach 2 : khai bao mang da chieu 

$students = array(
        "SV01" => array(
            "name" => "Petter",
            "sex" => 1,
            "scores" => array(1,2,3)
        ),
        "SV02" => array(
            "name" => "John",
            "sex" => 1,
            "scores" => array(4,5,6)
        ),
        "SV03" => array(
            "name" => "Merry",
            "sex" => 0,
            "scores" => array(7,8,9)
        ),
);

echo "<pre>";
print_r($students);
echo "</pre>";

//Ten cua SV02 
echo $students['SV02']['name']. "</br>";

// DIem mon thu 2 cua SV03
echo $students['SV03']['scores'][2]. "</br>";

// THay doi ten cua SV02 thanh Kenvin 
$students['SV02']['name'] = "Kenvin";

//thay doi diem cua SV02 mon thu 2 thanh 10 
$students['SV03']['scores'][1] = 10;

echo "<pre>";
print_r($students);
echo "</pre>";




