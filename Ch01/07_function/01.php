<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw Box</title>
    <link type="text/css" rel="stylesheet" href="style.css" media="screen">
</head>
<body>
   <div class="content">
   <?php 
   function createBox($name,$width,$height)
   {
       $padding = $height/2;
       $result = '<div style="with:'.$width.'px;height:'.$height.'px;">';
       $result .='<p style="padding:'.$padding.'px">'.$name.'<span>('.$width.'x'.$height.')<span></p>';
       $result.='</div>';
       return $result;
   }
   $boxA = createBox('Box A',350,200);
   $boxB = createBox('Box B',200,150);
   echo $boxA. $boxB;
   ?>
   
   </div>
    
</body>
</html>