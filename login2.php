<?php
session_start();
include('tt1.php');
?>
<?php
if (isset($_POST['submit'])){
	$username=$_POST['Username'];
	$password=md5($_POST['password2']);
	$sql2="select * from memberrigester where Username = '$username'" ;
	$result=mysqli_query($link,$sql2);
	$data = mysqli_fetch_array($result);
	if ($data<=0){
		echo "<script>";
		echo"alert(' ไม่พบชื่อผู้ใช้งานนี้');";
    echo"window.location='login2.php';";
		echo "</script>";
	}
	else if  ($data['status']==0)
	 {
		if ($data['password2']==$password) {
			$_SESSION['Username']=$data['Username'];
			$_SESSION['m_id']=$data['ID'];
			$_SESSION['telephone']=$data['telephone'];
			$_SESSION['address']=$data['Address'];
			$_SESSION['email']=$data['Email'];
			$_SESSION['postcode']=$data['poststation'];
			echo "<script>";
			echo"alert('ํWelcome :D');";
	    echo"window.location='profile.php';";
			echo "</script>";
		}
		else {
			echo "<script>";
			echo"alert('ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง');";
	        echo"window.location='login2.php';";
					echo "</script>";
		}
	} else if ($data['status']==1) {
		if ($data['password2']==$password)
		{
			$_SESSION['Username']=$data['Username'];
			$_SESSION['m_id']=$data['ID'];
			echo "<script>";
			echo"alert('ํ Welcome Admin (:');";
	    echo"window.location='profileAdmin.php';";
			echo "</script>";
		}

	}else if ($data['status']==2){
		if ($data['password2']==$password) {
			$_SESSION['Username']=$data['Username'];
			$_SESSION['m_id']=$data['ID'];
			echo "<script>";
			echo"alert('ํ Welcome Admin (:');";
	    echo"window.location='index_cust.php';";
			echo "</script>";
		}
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="bs-digishop-mini/assets/css/bootstrap.css" rel="stylesheet">
<style media="screen">


body {
	background-image: url("beautiful.jpg");
	background-color:#cdcdcd
}
p.thick {
    font-weight: white;
}
</style>
<link href="bootstrap_php/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
<form id="form1" name="form1" action="" method="post">
  <table  width="300" align="center" border="0" cellspacing="1" cellpadding="1">
    <tbody>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="121"><label for="Username"><p>Username</p></label></td>
        <td width="166">
        <input class="form-control" type="text" name="Username" id="Username"></td>
      </tr>
      <tr>
        <td height="44"><label for="password2"><p>Password</p></label></td>
        <td>
        <input class="form-control" type="password" name="password2" id="password2"></td>
      </tr>
      <tr>
        <td colspan="2"  align="center"><input name="submit" type="submit" class="btn btn-primary" id="submit" value="Submit"></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>
