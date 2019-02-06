<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Cross site scripting</h1>
    <?php
      //htmlspecialchars는 변조가능성을 방지한다 (해킹방지) == 스크립트를 실행시켜주지않고 문자로 출력시켜준다.
      //보안XSS:: 변조방지를 위해 htmlspecialchars (사용자가 입력한 정보를 무조건 불신하라)
      echo htmlspecialchars('<script>alert("babo");</script>');
     ?>
  </body>
</html>
