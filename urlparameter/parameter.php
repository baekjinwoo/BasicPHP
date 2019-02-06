<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    안녕하세요. <?php echo $_GET['address']; //http://127.0.0.1/urlparameter/parameter.php?address=서울&name=leezche ?>에 사시는
    <?php echo $_GET['name']; //url로 넘어온 name의 값 ?>님
  </body>
</html>
