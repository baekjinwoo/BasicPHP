<?php
  /*function print_title(){
    if(isset($_GET['id'])){
      echo $_GET['id'];
    }else{
      echo "Welcome";
    }
  }
  function print_description(){
    if(isset($_GET['id'])){
      echo file_get_contents("../data/".$_GET['id']);
    }else{
      echo "Hello, PHP";
    }
  }
  function print_list(){
    $list = scandir('../data');
    //var_dump($list);

    $i = 0;
    while($i < count($list)){
      if($list[$i]!='.'){
        if($list[$i]!='..'){
          echo "<li>
                  <a href=\"index4.php?id=$list[$i]\">
                        $list[$i]
                  </a>
                </li>\n";
        }
      }
      $i = $i + 1;
    }
  }*/
  //26. 파일로 모듈화 (require)
  require_once('../lib/print.php');
  require('../view/top.php');
 ?>

    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])){ ?>
      <a href="update.php?id=<?=$_GET['id']; //php echo $_GET['id']; ?>">update</a>
      <a href="delete_process.php?id=<?=$_GET['id']; //삭제는 <form>거치지않고 delete_process로 클릭시 삭제되도록! ?>">delete</a>
      <form action="delete_process.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" value="delete">
      </form>
    <?php }  ?>

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
