<?php
  //1. 글생성 :: index4.php =>
  //                          create.php와 create_process.php
  file_put_contents('data/'.$_POST['title'], $_POST['description']);
  header('Location: index4.php?id='.$_POST['title']);
 ?>
