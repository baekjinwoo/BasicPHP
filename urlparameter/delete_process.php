<?php
  //php file imap_delet
  //unlink rmdir, unset
  //3. 글삭제 :: index4.php =>
  //                          delete_process.php
  //F12개발자도구 => network => delete버튼클릭시 서버와 주고받는 데이터를 쌓아둘 수 있는데 이를 이용해 해커들이 악용할 수 있다. 때문에 basename쓴다.
  unlink('../data/'.basename($_GET['id']));  //삭제방법1:  a태그의 GET방식으로 해당위치의 파일삭제한다
  unlink('../data/'.basename($_POST['id'])); //삭제방법2:  form태그의 POST방식으로 해당위치의 파일삭제한다

  header('Location: index4.php'); //그리고 index4.php라는 home으로 이동한다 (경로설정은 그때그때마다 다르다. /index4.php라고 해도된다)
?>
