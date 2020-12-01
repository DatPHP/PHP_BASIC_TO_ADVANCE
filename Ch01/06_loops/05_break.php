<?php 
$i = 0;
$dem = 0;
for($i = 0; $i <= 100; $i++)
{
    if($dem < 3)
    {
        if($i % 8 == 0 && $i > 0)
        {
            echo $i."</br>";
            $dem++;
        }
    }
    else
    {
      break;
    } 
} 