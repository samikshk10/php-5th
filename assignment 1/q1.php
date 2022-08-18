
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
</head>
<body>
<?php
function evaluate($name,$attendance,$hygiene,$rating)
{
  if($attendance<80 || $hygiene<50 || $rating<2)
  {
     echo $name ,".....You are fired from Rojan kirana pasal ";
  }

  else
  {
      echo "You are not fired for now!!!";
  }
}
$ename="kusal karki";
$eattendance=20;
$ehygiene=70;
$erating=3;
evaluate($ename,$eattendance,$ehygiene,$erating)
?> 
</body>
</html>