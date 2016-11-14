<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>เพิ่มประกาศใหม่</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="pro_name" value=""><br>
      <input type="submit" name="submit" value="เพิ่มประกาศ">
    </form>
    <?php
    require 'include/config.php';
    if (isset($_POST['submit'])) {
      $uid = $_COOKIE['uid'];
      $pro_name = $_POST['pro_name'];
      $sql = "INSERT INTO product VALUES('','$pro_name','$uid')";
      mysqli_query($link,$sql)or die(mysqli_error($link));

      echo "<script>
            alert('เพิ่มสินค้าแล้ว');
            window.location='index.php';
            </script>";


      }
     ?>
  </body>
</html>
