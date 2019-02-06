<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Funtion2</h1>
    <h2>Basic</h2>
    <?php
    //http://127.0.0.1/function/function2.php
      function basic(){//함수정의1
        print("Lorem ipsum dolor1<br>");
        print("Lorem ipsum dolor2<br>");
        print("<br>");
      }
      basic(); //함수호출2
      basic();
      basic();
     ?>


     <h2> parameter &amp; argument </h2>
     <?php
      function sum($left, $right){ //함수정의1:: sum함수내에 매개변수2개
        print($left+$right);
        print("<br>");
      }
      sum(2,4);//함수호출2
      sum(4,6);
      ?>

      <h2> return </h2>
      <?php
        function sum2($left, $right){ //함수정의1
          return $left+$right;
        }
        print(sum2(2,4)); //함수호출2
        file_put_contents('result.txt',sum2(2,4)); //sum2함수의 결과값이 result.txt파일로 생성된다.
        //email('egoing@egoing.net', sum2(2,4));
        //upload('egoing.net', sum2(2,4));
       ?>
  </body>
</html>
