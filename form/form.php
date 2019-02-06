<?php
  //form과 post에 대해
  //form.html에서 url에 get방식접근하고 form.php에서

  //GET방식은 북마크 용도로는 적합하지만, 데이터 수정하거나 삭제할때는 GET방식보다는 POST방식을 사용한다
  file_put_contents('../data/'.$_GET['title'], $_GET['description']); //폴더정리안했다면 '../data/'대신에 'data/'라고 적으면된다.
  echo "<p>title: ".$_GET['title']."</p>"; //연관배열 //echo $_GET['title'];
  echo "<p>descript: ".$_GET['description']."</p>";
?>
