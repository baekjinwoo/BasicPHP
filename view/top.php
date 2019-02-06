<?php
  //index4.php와 top.php에서의 require_once를 사용하게된다면, require대신 중복을 방지해준다.
  require_once('../lib/print.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      <?php
          //index3.php에서 함수를 도입해서 코드간략화
          print_title();
       ?>
    </title>
  </head>
  <body>
    <h1><a href="index4.php">WEB</a></h1>
    <ol>
      <?php
        print_list();
       ?>
    </ol>
