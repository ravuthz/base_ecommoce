<meta charset="utf-8">
<?php
if(empty($_COOKIE['status'])){
  echo"<script>
  alert('กรุณาเข้าสู่ระบบ');
  window.location='login/';
  </script>";
}
if ($_COOKIE['status']!='admin') {
  echo"<script>
  alert('หน้านี้เฉพาะผู้ดูแลเท่านั้น');
  window.location='login/';
  </script>";
  setcookie('status','',time()-(86400 * 30), "/");
  setcookie('username','',time()-(86400 * 30), "/");
}

?>
