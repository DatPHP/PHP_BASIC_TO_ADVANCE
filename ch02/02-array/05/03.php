<?php 
 $course = array("name"=> "PHP", "time"=> 200);
 echo "<pre>";
 print_r($course);
 echo "</pre>";

 // array_values($array) tra ve mot mang lien tuc co cac phan tu co gia tri la gia tri tu cac phan tum cua mang $array

 // array_keys($array): tra ve mot mang lien tuc co cac phan tu co gia tri la khoa lay tu cac phan tu cua mang $array
 $new_array = array_keys($course);
 echo "<pre>";
 print_r($new_array);
 echo "</pre>";