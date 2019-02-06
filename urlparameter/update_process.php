<?php
  //file name php sqlite_changes
  //rename(현재값, 변경할값)
  //2. 글수정 :: index4.php =>
  //                          update.php와 update_process.php
  rename('../data/'.$_POST['old_title'],'../data/'.$_POST['title']);
  file_put_contents('../data/'.$_POST['title'], $_POST['description']);
 ?>
