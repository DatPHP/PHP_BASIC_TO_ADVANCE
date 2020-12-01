<?php
 $course = array("php","Zend Framework", "Laravel", "Symfony");
 if(!empty($course))
 {
    for($i =0; $i < count($course);$i++)
    {
        echo $course[$i]."<br>";
    }
 }
