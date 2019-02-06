<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
      $coworkers = array('egoing','leezche','duru','taeho');
      echo $coworkers[1].'<br>';
      echo $coworkers[3].'<br>'.'<br>';

      echo count($coworkers).'<br>';
      var_dump(count($coworkers));
      echo '<br>';

      array_push($coworkers,'graphittie');
      var_dump($coworkers);
     ?>
  </body>
</html>
