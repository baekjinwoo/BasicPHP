<?php
  //26. 파일로 모듈화 (require)
  require_once('../lib/print.php');
  require('../view/top.php');
?>

    <a href="create.php">create</a>

    <form action="create_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="Title">
      </p>
      <p>
        <textarea name="description" placeholder="Description"></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
    <h2>
      <?php
        print_title();
       ?>
    </h2>
    <?php
      print_description();
     ?>

    <?php
      //26. 파일로 모듈화 (require)
      require('../view/bottom.php');
     ?>