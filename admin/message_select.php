
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post">
 <?php
include("tt1.php");//บรรทัดนี้เชื่อมต่อฐานข้อมูล
$sql="SELECT * FROM contact ";//ประมวลผล
mysqli_query($link,$sql);
$result=mysqli_query($link,$sql);
while($data=mysqli_fetch_array($result)){
?>
  <table width="199" cellspacing="1" cellpadding="1">
    <tbody>
      <tr>
        <td width="166">telephone</td>
        <td width="24">&nbsp;<?=$data['telephone'];?></td>
      </tr>
      <tr>
        <td>email</td>
        <td>&nbsp;<?=$data['email'];?></td>
      </tr>
      <tr>
        <td>detail</td>
        <td>&nbsp;<?=$data['detail'];?></td>
      </tr>
    </tbody>
  </table>
  <?php } ?>
</form>

</body>
</html>
