<?php
//php는 한 번 만들어진 함수는 재정의할 수 없다. 때문에 에러가 난다.
  function print_title(){
    if(isset($_GET['id'])){
      echo htmlspecialchars($_GET['id']); //보안XSS:: 변조방지를 위해 htmlspecialchars (사용자가 입력한 정보를 무조건 불신하라)
    }else{
      echo "Welcome";
    }
  }
  function print_description(){
    if(isset($_GET['id'])){
      //basename은 파일명만 추출하는 함수이다. basename과 htmlspecialchars를 이용해서 보안 파일 경로 보호를 할 수 있다.
      //파일시스템을 사용한 경우 http://127.0.0.1/urlparameter/index4.php?id=../password.txt

      //echo basename("../data/".$_GET['id']);
      //echo htmlspecialchars(file_get_contents("../data/".$_GET['id'])); //보안XSS:: 변조방지를 위해 htmlspecialchars (사용자가 입력한 정보를 무조건 불신하라)
      $basename = basename($_GET['id']);
      echo htmlspecialchars(file_get_contents("../data/".$basename));

    }else{
      echo "Hello, PHP";
    }
  }
  function print_list(){
    $list = scandir('../data');
    //var_dump($list);

    $i = 0;
    while($i < count($list)){
      $title = htmlspecialchars($list[$i]); //보안XSS:: 변조방지를 위해 htmlspecialchars (사용자가 입력한 정보를 무조건 불신하라)
      if($list[$i]!='.'){
        if($list[$i]!='..'){
          echo "<li>
                  <a href=\"index4.php?id=$list[$i]\">
                        $title
                  </a>
                </li>\n";
        }
      }
      $i = $i + 1;
    }
  }
 ?>
