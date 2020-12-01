<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break-Continue</title>
    <link type="text/css" rel="stylesheet" href="style04.css" media="screen">
</head>
<body>
<div class="content4">
    <h1> Giai Do Bang Vong Lap </h1>
    <div class ="question">
        <p> Yeu nhau cau sau bo ba </p>
        <p> Get nhau cau sau bo ba lam muoi </p>
        <p> moi nguoi mot mieng tram nguoi</p>
        <p> Co muoi bay qua hoi nguoi ghet yeu</p>
        <p> Hoi co bao nhieu nguoi yeu nhau, ghet nhau ? </p>
    </div>
    <div class ="answer">
        <p> Dap an: </p>
        <ul>
            <?php 
              /*
               x,y ( x <=9, y <=30 )
               3x + 7y = 100
               x + y =17
              */

              for($x = 1; $x <= 16; $x++)
              {
                for($y = 1; $y <= 9 ; $y++)
                {
                    if(3*$x + 10*$y == 100 && $x + $y == 17)
                    {
                       
                        echo"<li> $x nguoi yeu nhay , $y nguoi ghet nhau </li>";
                      
                    }
                   
                }
              }
            ?>
        </ul>
    </div>
</div>
</body>
</html>