<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <script src="./js/popper.js"> </script>
    <script src="./js/bootstrap.js"> </script>

</head>

<body>
    <?php
     include "./navbar.php";
    ?>
    <div class="container">

        <?php
         echo "ยินดีต้อนรับเข้าสู่เว็บไซต์";
         echo "<h1> Welcome to website </h1>";
         echo "<a href='./about.php'>เกี่ยวกับเรา</a>";
         $year = 2565;
         echo "$year";
         echo "ปี พ.ศ.", $year ;
         $salary = 25000;
         echo "เงินเดือน $salary บาท <br />";
         echo "เงินเดือน" , "บาท";
         $name ="รุจิรา มามีโชค ";
         $age = 56;
         echo "สวัสดี " , $name ;
         echo "คุณมีอายุ " .$age. " ปี ";
         define("WEB" , "http://Bussaba");
         echo "link to" .WEB;
        ?>
    </div>

</body>

</html>