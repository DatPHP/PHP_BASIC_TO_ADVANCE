<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chep phat </title>
    <link type="text/css" rel="stylesheet" href="style01.css" media="screen">
   
</head>
<body>

<div class="content">
    <h1> Chep Phat </h1>
    <div class = "note">
      <ul>
        <?php 
        $i =1;
        do
        {
          echo '<li>Em hua se khong di hoc tre nua</li>';
          $i++;
        }while($i <=10 );
        ?>
      </ul>
   </div>
</div>
</body>
</html>