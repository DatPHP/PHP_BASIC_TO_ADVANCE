<?php 

// array_pop($array) : loai bo phan tu cuoi cung cua mang. Ham tra ve phan tu cuoi cung da duoc loai bo 
// array_shift($array): loai bo phan tu dau tien cua mang. Ham tra ve phan tu dau tien da duoc loai bo. 
$course = array("PHP","Joombla", "Laravel", "Zend Framework", "jQuery");


function removeItems( &$array, $move, $type)
{
    $result = array();
    if(!empty($array))
    {
        if($move >= count($array))
        {
            $result = $array;
            $array = NULL;
        }
        else
        {

        for ($i = 1; $i <= $move; $i++)
        {
            if($type == 1) // xoa dau voi type = 1
            {
                $result[]  = array_shift($array);
            }
            elseif($type == 2) // xoa cuoi voi type = 2
            {
                $result[]  = array_pop($array);
            }
            
        }

        }
    }
   
    return $result;
}
echo "<pre>";
print_r($course);
echo "</pre>";
//xoa phan tu dau tien khoi mang 

$array_remove =  removeItems($course,10,1);

echo "<pre>";
print_r($array_remove);
echo "</pre>";

echo "<pre>";
print_r($course);
echo "</pre>";