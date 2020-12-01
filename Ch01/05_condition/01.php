<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mo phong may tinh dien tu</title>
    <link type="text/css" rel="stylesheet" href="style.css" media="screen">
   
</head>
<body>
<?php
$n1 = $n2 =$caculate = "";
if(isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['calculate']) )
{
     $n1 = $_POST['number1'];
     $caculate = $_POST['calculate'];
     $n2 = $_POST['number2'];
    if(is_numeric($n1) && is_numeric($n2)){
        $flag = true;
        $flag_calculate = true;
        switch($caculate){
            case "+":
                $result = $n1 + $n2;
                break;
            case "-":
                $result = $n1 - $n2;
                break;
            case "*":
            case "x":
                $result = $n1 * $n2;
                break;
            case "/":
            case ":":
                $result = $n1 / $n2;
                break;
            case "%":
                $result = $n1 % $n2;
                break;
            default:
                $flag_calculate = false;
                $result = "Vui long nhap lai phep tinh! Co the ban nhap sai phep tinh hoac ban chua nhap vao phep tinh";
        }
    }
    else{
        $flag = false; 
        $result = "Vui long nhap so hang la so ";
    }
}
?>
<div class="content">
    <h1> Mo Phong May Tinh DIen Tu  </h1>
    <form name = "main-form" method="POST" action="#">
        <div class="row">
            <span>So thu nhat</span>
            <input type="text" name ="number1" value = "<?php  echo $n1; ?>"> 
        </div>
        <div class="row">
            <span> Phep toan </span>
            <input type="text" name="calculate" value = "<?php  echo $caculate; ?>">
        </div>
        <div class="row">
            <span> So thu hai </span>
            <input type="text" name="number2" value = "<?php  echo $n2; ?>">
        </div>
        <div class="row">
            <input type="submit" name="submit" value = "xem ket qua">
        </div>

        <div class="row">
            <?php
            if($flag == true)
            {
                //if($caculate == "+" ||$caculate == "-" ||$caculate == "*" ||$caculate == "/" ||$caculate == "%" || $caculate == "x"|| $caculate == ":")
                if( $flag_calculate == true)
                echo "<p> Ket qua: ".$n1. " ".$caculate. " ".$n2." "."="." " . $result. "</p>";
                else
                echo $result;
            }
            else
            {
                echo $result;
            }
            
            ?>
        </div>
    </form>
</div>
</body>
</html>