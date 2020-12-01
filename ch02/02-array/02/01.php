<?php 

//way 1
 $course = array();
 $course[] = "php";
 $course[] = "Zend Framework";
 $course[] = "Laravel";
 $course[] = "Symfony";

 //way 2
 $course = array();
 $course[0] = "php";
 $course[1] = "Zend Framework";
 $course[2] = "Laravel";
 $course[3] = "Symfony";

 //way 3

 $course = array("php","Zend Framework", "Laravel", "Symfony");
 echo $course[1];
