<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>WEB </h1>
    <ol>
      <li> <a href="index2.php?id=HTML">HTML</a></li>
      <li> <a href="index2.php?id=CSS">CSS </a></li>
      <li> <a href="index2.php?id=JavaScript">JavaScript </a></li>
      <li><a href="index2.php?id=PHP"> PHP </a></li>
    </ol>


    <h2>
      <?php
      if(isset($_GET['id'])){ //ex) $a= "test"; var_dump(isset($a));
        #http://127.0.0.1/urlparameter/index2.php
        echo $_GET['id'];
      }else{
        echo "Welcome";
      }
       ?>
    </h2>
    <?php
      //echo data/id값에 해당하는 파일의 내용;
      //echo file_get_contents("data/HTML");
      //echo file_get_contents("data/".$_GET['id']);
      if(isset($_GET['id'])){
        echo file_get_contents("../data/".$_GET['id']);
      }else{
        echo "Hello, PHP";
      } 
     ?>
  </body>
</html>
