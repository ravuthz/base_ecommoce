
<?Php
if (isset($_POST['submit'])){
	include("tt1.php");
$users=mysql_real_escape_string($_POST['Username']);
$pas=mysql_real_escape_string($_POST['password2']);
$pas=md5($pas);

$sql=" SELECT * FROM memberrigester WHERE Username='".$users."' and password2='".md5($pas)."'";
$result=mysqli_query($link,$sql);
$num=mysql_num_rows($link,$result);
$data =mysqli_fetch_array($result);
if ($num==1){
	session_start();
	//$_SESSION['message']="You are now logged in";
		$_SESSION['reg_id']=$data['Username'];


	echo "<script>";
		echo"alert('เพิ่มข้อมูลนิสิตเรียบร้อยแล้ว');";
echo"window.location='ff1.php';";
		echo "</script>";
	}else
	{
		echo "<script>";
		echo"alert(' cannot login')";
		echo "</script>";
		}


}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form1" action="login.php" name="form1" method="post">
<table align="center" >
<tr>
<td>
    <label for="textfield">Username</label></td>
    <td>
    <input type="text" name="Username" id="Username"></td>
    </tr>
    <tr>
    <td>
      <label for="textfield">Password</label></td>
      <td>
    <input type="password" name="password2" id="password2"></td>
    </tr>
    <tr>
    <td><input type="submit" name="submit" id="submit" value="Login"></td>
    <td></td>
    </tr>
  </table>
</form>
</body>
</html>
