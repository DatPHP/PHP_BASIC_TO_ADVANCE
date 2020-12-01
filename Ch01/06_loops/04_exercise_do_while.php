<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Image Gallery </title>
    <link type="text/css" rel="stylesheet" href="style03.css" media="screen">
   
</head>
<body>

<div class="content3">
    <h1> Image Gallery </h1>
    <div class ="image">
        <?php 
          $i =1;
          do{
            echo ' <img src="images/tn0'.$i.'.jpg">';
            $Plag = 0;
            if(isset($_GET['Plag']))
            {

                $PlagShow = $_GET['Plag'];
                $i++;
            }
            
          }while($i <=4 && $PlagShow == 1);
        ?>
        <a href="04_exercise_do_while.php?Plag=1">Show All </a>
        <a href="04_exercise_do_while.php?Plag=0">Show Demo </a>
    </div>

      </ul>
   </div>
</div>
</body>
</html>