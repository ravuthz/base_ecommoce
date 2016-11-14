<?php
require('../include/function/function.php');
$login =  new loginclass();
$user = addslashes($_POST['username']);
$pass = md5($_POST['password']);
if($login -> chklogin($user,$pass)==true){
  echo "<script >
        window.location='../';
        </script>";
}else {
  echo "<script>
        alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
        window.location='../login';;
        </script>";
}
?>
