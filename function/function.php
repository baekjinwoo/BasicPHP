<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>function</h1>
    <?php
    #http://127.0.0.1/function/function.php
      $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      <br>
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      <br>
       Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
       <br>
       Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
      echo $str;
     ?>

     <h2> strlen() 갯수함수</h1>
     <?php
      //echo 1+1;
      echo strlen($str)
     ?>

     <h2>nl2br 자동줄바꿈함수</h2>
     <?php
      echo nl2br($str);
      ?>
  </body>
</html>
