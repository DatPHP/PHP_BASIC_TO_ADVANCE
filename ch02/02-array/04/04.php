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

foreach($students as $key => $value)
{
    $name = $value['name'];
    $sex = ($value['sex'] == 1)? "boy": "girl";
   
    //cach 1 tinh tong so diem 
    /*
    $point = 0;
    foreach($value['scores'] as $key => $value)
    {
        $point += $value;
    }
    */

    // cach 2: su dung ham array_sum de tinh tong so diem 
    $point = array_sum($value['scores']);
    echo "Name: ". $name. " - sex: ". $sex . " - total point: ". $point. "</br>";
}
