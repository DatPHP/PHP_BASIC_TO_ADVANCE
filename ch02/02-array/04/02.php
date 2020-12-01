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
