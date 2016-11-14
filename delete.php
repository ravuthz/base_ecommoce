<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<meta charset="utf-8">

</head>
<?php
include("tt1.php");//เชื่อมต่อ

$sql="DELETE FROM pic where id='".$_GET['code']."'";
var_dump($sql);
mysqli_query($link,$sql)or die("delete ไม่ได้");
echo"<script>";
echo"alert('ลบข้อมูลนิสิตเรียบร้อยแล้ว');";
echo"window.location='profile.php';";
echo"</script>";

?>
<body>
</body>
</html>
<body>
</body>
</html>
