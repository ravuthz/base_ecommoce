 <?php
include("tt1.php");//เชื่อมต่อฐานข้อมูล
//$image=$_FILES['pimage']['name'];
$sql=" select*from pic where id='".$_GET['code']."' ";
$result=mysqli_query($link,$sql);
$data2=mysqli_fetch_array($result);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="200" align="left" border="1" cellspacing="1" cellpadding="1">
  <p>
  <tr>
  <td>  <label for="pid">id</label>
  </td>
  <td>
    <input type="text" name="id" id="id" value="<?php echo $data['id']?>" />
    </td>
    </tr>
    </p>
 <p> <tr>
  <td>
    <label for="b_name">name</label>
    </td>
    <td>
    <input type="text" name="b_name" id="id" value="<?php echo $data['b_name']?>" />
    </td>
    </tr></p>
    <p>
    <tr>
  <td>
    <label for="paddress">Detail</label>
    </td>
    <td>
    <textarea name="text" id="text" cols="45" value="<?php echo $data['text']?>" rows="5"></textarea></td>
    </tr></p>
    <p>

    <tr>
<td>
    <label for="b_name">price</label>
    </td>
    <td>
    <input type="text" name="b_price" id="id" value="<?php echo $data['b_price']?>" />
 </td>
 </tr></p>
 <p>
 <tr>
 <td>
    <label for="b_name">zone</label>
    </td>
    <td>
    <input type="text" name="city" id="id" value="<?php echo $data['city']?>" />
    </td>
    </tr></p>
    <p>

 <tr> <td>
    <label for="b_name">Phone number</label>
    </td>
    <td>
    <input type="text" name="seller_tel" id="id" value="<?php echo $data['seller_tel']?>" />
    </td>
    </tr></p>
    <p>
  <tr><td>
    <label for="pimage">image</label>
    </td>
    <td>
    <input type="file" name="pimage" id="pimage" value="<?php echo $data2['name'] ?>" />
  </td>
  </tr></p>
  <p>
  <tr>
  <td>
    <input type="submit" name="submit" id="submit" value="Upload" />
    </td></tr>

  </p></table>
</form>
<?php
if(isset($_POST['submit'])){
	 $target="images/".basename($_FILES['pimage']['name']);
	 $image=$_FILES['pimage']['name'];
$sql2="update pic set id='$_POST[id]',name='$image',text='$_POST[text]',b_name='$_POST[b_name]',b_price='$_POST[b_price]',city='$_POST[city]',seller_tel='$_POST[seller_tel]' where  id='".$_GET['code']."'";
mysql_query($sql2) or die("insert ไม่ได้");
move_uploaded_file($_FILES['pimage']['tmp_name'],$target);
echo"<script>";
echo"alert('เพิ่มข้อมูลนิสิตเรียบร้อยแล้ว');";
echo"window.location='ff1.php';";
echo"</script>";
}
?>
</body>
</html>
