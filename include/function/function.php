<?php

/**
 *
 */
class loginclass
{
  function chklogin($user,$pass){
    require('../include/config.php');
    $sql = "SELECT * FROM memberrigester WHERE Username='$user' AND password2='$pass'";
    $rs = mysqli_query($link,$sql)or die(mysqli_error($link));
    $data = mysqli_fetch_array($rs);
    $u = $data['Username'];
    $p = $data['password2'];
    $s = $data['status'];
    if ($user == $u && $pass == $p) {
      setcookie('user', $u, time() + (86400 * 30), "/"); // 86400 = 1 day
      setcookie('status', $s, time() + (86400 * 30), "/"); // 86400 = 1 day
        return true;
    }else {
        return false;
    }
  }
  function getUser($user){
    $sql = "SELECT * FROM memberrigester WHERE sername='$user'";
    $rs  = mysqli_query($link,$sql)or die(mysqli_error($link));

  }
}







?>
