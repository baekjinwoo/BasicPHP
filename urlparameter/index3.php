<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index3.php">WEB</a></h1>
    <ol>
      <?php
        //index2.php와 다른부분
        //scandir 디렉토리 하위의 파일 및 디렉토리 목록을 배열로써 조회
        $list = scandir('../data');
        var_dump($list);

        //배열연습
        /*
        echo "<br><br>";
        echo "<li>$list[0]</li>\n";
        echo "<li>$list[1]</li>\n";
        echo "<li>$list[2]</li>\n";
        echo "<li>$list[3]</li>\n";
        echo "<li>$list[4]</li>\n";
        echo "<li>$list[5]</li>\n";
        */

        //배열대신 반복문으로 링크 (data폴더에 파일만 만들면 자동으로 추가가 되도록 코드가 짜졌다. ex( git ))
        echo "<br><br>";
        $i = 0; //2부터라고 적지말고 아래와같이 .이나 ..이 아닌경우만 조회하라는 조건문& 비교연산자를 이용하자.
        while($i < count($list)){ //while($i < 6)
          if($list[$i]!='.'){
            if($list[$i]!='..'){
              echo "<li>
                      <a href=\"index3.php?id=$list[$i]\">
                            $list[$i]
                      </a>
                    </li>\n";
            }
          }
          $i = $i + 1;
        }
       ?>
    </ol>


    <h2>
      <?php
      //isset 값이 있고없음을 의미 <--> empty 0이나 false, null이면 true반환
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
