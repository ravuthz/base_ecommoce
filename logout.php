<?php
session_start();
session_destroy();
unset($_POST['Username']);
echo "<script>";
		echo"alert('เพิ่มข้อมูลนิสิตเรียบร้อยแล้ว');";
        echo"window.location='form.index.php';";
		echo "</script>";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
