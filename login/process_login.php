<?php

require('../include/function/function.php');
$login =  new loginclass();
$user = addslashes($_POST['Username']);
$pass = md5($_POST['password2']);
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
