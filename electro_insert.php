<?php
include("tt1.php");//เชื่อมต่อฐานข้อมูล
?>
<?php 
$msg="";
if (isset($_POST['submit']))
 {
	 $target="images/".basename($_FILES['pimage']['name']);
	///$db=mysql_connect("localhost","root","1234","dbmimage");
	  $id=$_POST['id'];
	 $image=$_FILES['pimage']['name'];
	 $text=$_POST['text'];
	 $e_name=$_POST['E_name'];
	 $kind_pro=$_POST['kind_pro'];
	 $e_price=$_POST['e_pric'];
	  $city=$_POST['city'];
	   $seller_tel=$_POST['seller_tel'];
	 $sql="insert into electronic(id, name_pic,text,E_name,e_pric,kind_pro,city,seller_tel) values ('$id','$image','$text', '$e_name','$kind_pro','$e_price','$city','$seller_tel')";
	mysql_query($sql);
	if(move_uploaded_file($_FILES['pimage']['tmp_name'],$target))
	    {	
echo"<script>";
echo"alert('เพิ่มข้อมูลนิสิตเรียบร้อยแล้ว');";
echo"window.location='ff1.php';";
echo"</script>";
		//$msg="Uploaded successfully";
		}else
		{
			$msg="There was a problem uplouding image";
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
<form method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="200" align="" border="1" cellspacing="1" cellpadding="1">
    <tbody>
      <tr>
        <td>&nbsp;</td>
        <td>
        <input type="text" name="id" id="id"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
        <input type="text" name="kind_pro" id="kind_pro"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
        <input type="text" name="E_name" id="E_name"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
        <textarea name="text" id="text"></textarea></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
        <input type="text" name="e_pric" id="e_pric"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
        <input type="file" name="pimage" id="pimage"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
        <input type="text" name="city" id="city"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
        <input type="text" name="seller_tel" id="seller_tel"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="Submit"></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>