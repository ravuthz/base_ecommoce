<?php
require('include/cookies.php');
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>หน้าแรก</title>
   </head>
   <body>
     ผู้ใช้งาน <?php echo "  ".$_COOKIE['status']; ?>
     <table>
       <tr>
         <td>รหัสสินค้า</td>
         <td>ชื่อสินค้า</td>
         <td>เจ้าของ</td>
       </tr>

        <?php
        require 'include/config.php';
        $uid = $_COOKIE['uid'];
        $sql = "SELECT * FROM product,members WHERE product.u_id='$uid' AND members.id=product.u_id";
        $rs =mysqli_query($link,$sql)or die(mysqli_error($link));
        while ($data=mysqli_fetch_array($rs)) {

         ?>
       <tr>
         <td><?=$data['pro_id'];?></td>
         <td><?=$data['pro_name'];?></td>
         <td><?=$data['fname'];?>  <?=$data['lname'];?></td>
       </tr>
       <?php } ?>

     </table>
     <a href="logout.php">ออกจากระบบ</a>
   </body>
 </html>
