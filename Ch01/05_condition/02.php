<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lay chom sao </title>
    <link type="text/css" rel="stylesheet" href="style01.css" media="screen">
   
</head>
<body>

<?php 

  $date ='';
  $month = '';
  $image = '';
  $name = '';
  $time = '';
  $flag = true;


  if(isset($_POST['date']) && isset($_POST['month']))
  {
         $date = $_POST['date'];
         $month = $_POST['month'];
         echo "Nguyen Van Dat";

     switch($month)
     {

        case 1:
            if($date <= 19){ $image = 'Capricorn'; $name = 'Ma kết'; $time = ' 22/12 – 19/1'; }
            if($date >= 20 ){ $image = 'Aquarius'; $name = 'Bảo Bình';  $time = '20/1 – 18/2';}
            $url = 'images/'.$image.'.jpg';
            if($date <= 1 || $date > 31 ) { $flag = false; } 
            break;

         case 2:
            if($date <=18){ $image = 'Aquarius';   $name = 'Bảo Bình';  $time = '20/1 – 18/2'; }
            if($date >=19 ) {  $image = 'Pisces';   $name = 'Song ngư';   $time = '19/2 – 20/3'; }
            $url = 'images/'.$image.'.jpg';
            if($date <= 1 || $date > 28 ) { $flag = false; }
            break;

         case 3:
            if($date <=20 ){ $image = 'Pisces'; $name = 'Song ngư'; $time = '19/2 – 20/3'; }
            if($date >=21 ) { $image = 'Taurus'; $name = 'Bạch dương'; $time = '21/3 – 19/4'; }
            $url = 'images/'.$image.'.jpg';
            if($date <= 1 || $date > 31 ) { $flag = false; } 
            break;
        case 4:
            if($date <=19){ $image = 'Taurus'; $name = 'Bạch dương'; $time = '21/3 – 19/4';}
            if($date >=20 ){ $image = 'Gemini'; $name = 'Song Tử'; $time = '20/4 – 20/5';}
             $url = 'images/'.$image.'.jpg';
            if($date <= 1 || $date > 30 ) {$flag = false; }
            break;
        case 5:
            if($date <=20){ $image = 'Gemini'; $name = 'Song Tử'; $time = ' 20/4 – 20/5' ;}
            if($date >=21 ){ $image = 'Cancer'; $name = 'Cự Giải'; $time = '21/5 – 21/6' ;}
             $url = 'images/'.$image.'.jpg';
            if($date <= 1 || $date > 31 ) {$flag = false; }
            break;
        case 6:
            if($date <=21){ $image = 'Cancer'; $name = 'Cự Giải'; $time = '21/5 – 21/6'; }
            if($date >=22 ){ $image = 'Leo'; $name = 'Sư Tử'; $time = '22/6 – 22/7';}
             $url = 'images/'.$image.'.jpg';
            if($date <= 1 || $date > 30 ) {$flag = false; }
            break;
        case 7:
            if($date <=22){ $image = 'Leo'; $name = 'Sư Tử'; $time = ' 22/6 – 22/7' ;}
            if($date >=23 ){ $image = 'Virgo'; $name = 'Xử Nữ '; $time = '23/7 – 22/8';}
             $url = 'images/'.$image.'.jpg';
            if($date <= 1 || $date > 31 ) {$flag = false; }
            break;
        case 8:
            if($date <=22){ $image = 'Virgo'; $name = 'Xử Nữ '; $time = '23/7 – 22/8'; }
            if($date >=23 ){ $image = 'Libra'; $name = 'Thiên Bình'; $time = '23/8 – 22/9';}
             $url = 'images/'.$image.'.jpg';
            if($date <= 1 || $date > 31 ) {$flag = false; }
            break;
        case 9:
            if($date <=22){ $image = 'Libra'; $name = 'Thiên Bình'; $time = '23/8 – 22/9' ;}
            if($date >=23 ){ $image = 'Scorpio'; $name = 'Thiên Yết '; $time = '23/9 – 22/10';}
             $url = 'images/'.$image.'.jpg';
            if($date <= 1 || $date > 30 ) {$flag = false; }
            break;
        case 10:
            if($date <=22){ $image = 'Scorpio'; $name = 'Thiên Yết '; $time = ' 23/9 – 22/10'; }
            if($date >=23 ){ $image = 'Sagittarius'; $name = 'Nhân Mã '; $time = '223/10 – 22/11';}
             $url = 'images/'.$image.'.jpg';
            if($date <= 1 || $date > 31 ) {$flag = false; }
            break;
        case 11:
            if($date <=19){ $image = 'Sagittarius'; $name = 'Nhân Mã '; $time = ' 23/10 – 22/11'; }
            if($date >=20 ){ $image = 'Capricorn'; $name = 'Ma Kết'; $time = '23/11 – 21/12';}
            $url = 'images/'.$image.'.jpg';
            if($date <= 1 || $date > 30 ) {$flag = false; }
            break;
        case 12:
            if($date <=19){ $image = 'Capricorn'; $name = 'Ma Kết'; $time = ' 23/11 – 21/12' ;}
            if($date >=20 ){ $image = 'Aquarius'; $name = 'Bảo Bình'; $time = '22/12 – 19/1' ;}
             $url = 'images/'.$image.'.jpg';
            if($date <= 1 || $date > 31 ) {$flag = false; }
            break;

        default:
            $flag = false;
            break;

    }
  }
  else
  {
    echo "NHap du lieu khong dung";
  }


?>
<div class="content">
    <h1> Lay chom sao </h1>
    <form name = "main-form" method="POST" action="#">
        <div class="row">
            <span>Ngay sinh</span>
            <input type="text" name ="date" value = "<?php  echo $date; ?>"> 
        </div>
        <div class="row">
            <span> Thang sinh</span>
            <input type="text" name="month" value = "<?php  echo $month; ?>">
        </div>
        <div class="row">
            <input type="submit" name="submit" value = "Lay chom sao ">
        </div>

      <div class='result'>
         <img src="<?php echo $url ?>" alt=" <?php echo $name ?>">
         <p> <?php echo $name ?> <span> ( <?php  echo $time  ?>  ) </span> </p> 
     </div>

    </form>
</div>
</body>
</html>