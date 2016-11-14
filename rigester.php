<?php
session_start();
include("tt1.php");

?>
<?php

if (isset($_POST['submit'])){
	$id=mysql_real_escape_string($_POST['ID']);
	$name=mysql_real_escape_string($_POST['Name']);
	$genda=mysql_real_escape_string($_POST['genda']);
	$address=mysql_real_escape_string($_POST['Address']);
	$email=mysql_real_escape_string($_POST['Email']);
	$tel=mysql_real_escape_string($_POST['telephone']);
	$city=mysql_real_escape_string($_POST['city']);
	$district=mysql_real_escape_string($_POST['district']);
	$post=mysql_real_escape_string($_POST['poststation']);
	$username=mysql_real_escape_string($_POST['Username']);
	$pass1=mysql_real_escape_string($_POST['password']);
	$pass2=mysql_real_escape_string($_POST['password2']);
	if ($pass2==$pass1){
		$pass2=md5($pass1);
		$sql="insert into memberrigester (ID, Name, genda, Address, Email, telephone, city, district, poststation, Username, password2,status ) values ('$id','$name','$genda','$address','$email','$tel','$city', '$district','$post','$username', '$pass2','0')";
		mysqli_query($link,$sql);
	///	$_SESSION['message']="You are now logged in";
		$_SESSION['Username']=$username;
		echo "<script>";
		echo"alert('เพิ่มข้อมูลนิสิตเรียบร้อยแล้ว');";
echo"window.location='confirm.php';";
		echo "</script>";
		} else{
			$_SESSION['message']="The tow password do not match";
			}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
textarea {
	width:100px;
	height:30;
}

</style>
<link href="bs-digishop-mini/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
 <form id="form1" action="" name="form1" method="post">
  <table align="center" width="458" cellspacing="1"  cellpadding="1">
    <tbody>
      <tr>
        <td><label for="Name">Fullname</label>
        <input name="Name" class="form-control" type="text" id="Name" size="150" />
        </td>
      </tr>
      <tr>
        <td><input name="genda" type="radio" id="genda" form="form1" value="Male">
          <label>Male </label>
            <input  name="genda" type="radio" id="genda"  form="form1" value="Female">
           <label> Female</label>
            </td>
      </tr>
      <tr>
       <td>
        <label for="Address">Address</label>
         <textarea name="Address" class="form-control" id="Address"></textarea>
</td>

      </tr>
      <tr>
        <td><label for="">Email address</label>
        <input name="Email" class="form-control" type="text" id="Email" size="50"></td>
      </tr>
      <tr>
        <td><label for="email">phone number</label>
          <input  name="telephone" class="form-control" type="text" id="telephone" size="50" />
        </td>
      </tr>
      <tr>
        <td><label for="emailuser">City/Province</label>
          <input name="city" class="form-control" type="text" id="city" size="150"></td>
      </tr>
       <tr>
        <td><label for="">District/Tambun</label>
        <input name="district" class="form-control" type="text" id="firstname" size="50"></td>
      </tr>
      <tr>
        <td><label for="">Poststation</label>
        <input name="poststation" class="form-control" type="text" id="poststation" size="50"></td>
      </tr>
      <tr>
        <td><label for="">Username</label>
        <input name="Username" class="form-control" type="text" id="Username" size="50"></td>
      </tr>
      <tr>
        <td><label for="password">Password</label>
        <input name="password" class="form-control" type="password" id="password" size="50"></td>
      </tr>
       </tr>
      <tr>
        <td><label for="password">Password</label>
        <input name="password2" class="form-control" type="password" id="password2" size="150"></td>
      </tr>
      <tr>
        <td><input type="submit" align="middle"  class="btn btn-info" name="submit" id="submit" value="Register"></td>
      </tr>

    </tbody>
  </table>
</form>
</body>
</html>
