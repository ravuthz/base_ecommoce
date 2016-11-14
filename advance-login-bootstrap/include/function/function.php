<?php

/**
 *
 */
class loginclass
{
  function chklogin($user,$pass){
    require('../include/config.php');
    $sql = "SELECT * FROM members WHERE username='$user' AND password='$pass'";
    $rs = mysqli_query($link,$sql)or die(mysqli_error($link));
    $data = mysqli_fetch_array($rs);
    $uid = $data['id'];
    $u = $data['username'];
    $p = $data['password'];
    $s = $data['status'];
    if ($user == $u && $pass == $p) {
      setcookie('uid', $uid, time() + (86400 * 30), "/"); // 86400 = 1 day
      setcookie('user', $u, time() + (86400 * 30), "/"); // 86400 = 1 day
      setcookie('status', $s, time() + (86400 * 30), "/"); // 86400 = 1 day
        return true;
    }else {
        return false;
    }
  }
  function getUser($user){
    $sql = "SELECT * FROM members WHERE username='$user'";
    $rs  = mysqli_query($link,$sql)or die(mysqli_error($link));

  }
}







?>
