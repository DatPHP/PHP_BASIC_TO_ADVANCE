<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ve tam giac  </title>
    <link type="text/css" rel="stylesheet" href="style02.css" media="screen">
   
</head>
<body>

<div class="content2">
    <h1> Ve tam giac </h1>
    <div class = "note">
      <ul>
          <li><a href ="vetamgiac.php?type=1"> <img src="images/t1.png"></a></li>
          <li><a href ="vetamgiac.php?type=2"> <img src="images/t2.png"></a></li>
          <li><a href ="vetamgiac.php?type=3"> <img src="images/t3.png"></a></li>
      </ul>
   </div>

        <div class="result">
            <?php 
            $str_result = "";
            $type = $_GET['type'];
            if(isset($type))
            {
                switch ($type) {
                  case 1:
                    echo "<p> Vo 1 </p>";
                    $i = 1;
                    while ( $i <= 6 ) {
                      $str_result .= str_repeat('*', $i)."</br>";
                      $i++;
                    }
                    echo $str_result;
                    break;

                  case 2:

                    /* 


                      *
                    * * *
                   *  *  * * *
                 * * * * * * *



                    */
                    echo "<p> Vo 2 </p>";
                    $i = 1;
                    $n=6;
                    while ( $i <= $n ) {
                      $space = str_repeat("&nbsp&nbsp", $n - $i);
                      $character = str_repeat('*', $i*2-1);
                      $str_result .= $space. $character. "<br/>";
                      $i++;
                    }
                    echo $str_result;
                    break;

                  case 3:
                    echo "<p> Vo 3 </p>";
                    $i = 6;
                    while ( $i >= 1) {
                      $str_result .= str_repeat('*', $i)."</br>";
                      $i--;
                    }
                    echo $str_result;
                    break;
                }
            }
            echo $tr_result;
            ?>
        </div>
</div>

</body>
</html>