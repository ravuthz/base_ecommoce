<?php
session_start();
include("tt1.php") ;
if(isset($_GET['id'])) {

	$sql = "select * from pic where id='$_GET[id]' ";
	$result = mysqli_query($link,$sql) ;
	$data = mysqli_fetch_array($result) ;

	$a = $_GET['id'] ;
	$_SESSION['pro_id'][$a] = $data['id'];
	$_SESSION['pro_name'][$a] = $data['b_name'];
	$_SESSION['pic_name'][$a] = $data['name'];
	$_SESSION['pro_price'][$a] = $data['b_price'];
	$_SESSION['pro_item'][$a]='0';

	if(in_array($a ,$_SESSION['pro_id'])) {
		$_SESSION['pro_item'][$a]++ ;
	} else {
		$_SESSION['pro_item'][$a] = 1;
	}

}
$total = 0;
$y = 0;

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ตะกร้าสินค้า </title>
<link href="bootstrap.css" rel="stylesheet" type="text/css">

</head>

<body>
<h2>ตะกร้าสินค้า <?=$_SESSION['m_id']?></h2>
<br>
<table border="0" cellspacing="1" cellpadding="1" class="table table-condensed" style="width:840px">
  <tr align="center">
    <td width="50">ที่</td>
    <td width="187">รูปภาพ</td>
    <td width="318">สินค้า</td>
    <td width="115">ราคาต่อชิ้น</td>
    <td width="114">จำนวน</td>
    <td width="114">&nbsp;</td>
  </tr>
<?php

if (isset($_SESSION['pro_id'])) {

	foreach($_SESSION['pro_id'] as $b) {
		$y++;
		$total += $_SESSION['pro_price'][$b] * $_SESSION['pro_item'][$b] ;
		$sum = $_SESSION['pro_price'][$b] * $_SESSION['pro_item'][$b];

?>
  <tr>
    <td align="center" valign="middle"><?=$y?></td>
    <td align="center"><img src="images/<?=$_SESSION['pic_name'][$b]?>" style="width:50px"></td>
    <td valign="middle">รหัส: <?=$_SESSION['pro_id'][$b];?> <br />
    <?=$_SESSION['pro_name'][$b];?></td>
    <td align="right" valign="middle"><?= number_format($_SESSION['pro_price'][$b],0);?></td>
    <td align="right"><?=$_SESSION['pro_item'][$b];?></td>
    <td align="right"><a href="clear.php?id=<?=$_SESSION['pro_id'][$b]?>&act=del">ลบ</a></td>
  </tr>
<?php
	}
}
?>
  <tr>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="right" valign="middle">ราคาสินค้ารวม</td>
    <td align="right" valign="middle"><?=number_format($total,0);?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<br>
<input type="button" name="button" id="button" value="กลับไปเลือกสินค้า" class="btn btn-success" onClick="window.location='index.login.php';">
<input type="button" name="button" id="button" value="ยกเลิกรายการทั้งหมด" class="btn btn-warning" onClick="window.location='clear.php';">
<input type="button" name="button" id="button" value="ยืนยันการสั่งซื้อ" class="btn btn-primary" onClick="window.location='basket.php?act=confirm';">
<br>
<br>

<?php
include("tt1.php") ;
if ($_GET['act']=="confirm") {

	$sql2 = "insert into `orders` values('', '$total', CURRENT_TIMESTAMP, '".$_SESSION['m_id']."')" ;
	$result=mysqli_query($link,$sql2) or die ("insert order ไม่ได้") ;
	//$row=mysqli_fetch_array($result);
	//$_SESSION['oid']=$row['or_id'];
	//$oid = mysql_insert_id($link) ;
	  $orderID = $link->insert_id;
	foreach($_SESSION['pro_id'] as $z) {
$sql3 = "insert into ord_item values('$orderID', '".$_SESSION['pro_id'][$z]."', '".$_SESSION['pro_item'][$z]."')" ;
		mysqli_query($link,$sql3) or die ("insert order_detail ไม่ได้") ;
	}
	echo "<script>" ;
	echo "alert('การสั่งซื้อเสร็จสมบูรณ์');" ;
	echo "window.location='pay.php';" ;
	echo "</script>" ;

}
?>

</body>
</html>
