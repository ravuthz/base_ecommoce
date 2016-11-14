<?php
session_start();

if(isset($_POST['id'])) {
	include("tt1.php") ;
	$sql = "select * from pic where id='$_POST[id]'";
	$result = mysql_query($sql) ;
	$data = mysql_fetch_array($result) ;

	$a = $_POST['id'] ;
	$_SESSION['pid'][$a] = $data['id'];
	$_SESSION['pname'][$a] = $data['b_name'];
	$_SESSION['pprice'][$a] = $data['b_price'];
	$_SESSION['pitem'][$a] = $_POST['qty'];

	/*if(in_array($a, $_SESSION['pid'])) {
		$_SESSION['pitem'][$a]++ ;
	} else {
		$_SESSION['pitem'][$a] = $_POST['qty'];
	}*/

}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<title>OTOP:ตะกร้าสินค้า</title>
<?
include("chk_cus.php");
?>



<body>
*?/<

if($_SESSION['ses_id'] > 0){
include("tabup.php");

  }else{
include("tabupd.php");
  }
?>*/
<form action="" method="post" enctype="multipart/form-data" name="form2">
  <table width="900" border="0" align="center">
    <tr>
      <td width="580" bgcolor="#FFFFFF"><h2><img src="images/logo.jpg" width="80" height="80"> ผลิตภัณฑ์โอทอปและภูมิปัญญาไทย</h2></td>
      <td width="310" align="right" >
                           <a href="cart.php"><i class="fa fa-shopping-cart fa-2x"></i></a>
                           <p>
      <div class="input-group stylish-input-group">
              <input type="text" class="form-control"  placeholder="ค้นหา..." >
                 <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
        </td>
    </tr>
   </table>
</form>
<form action="" method="post" name="form3" class="label-info">
  <table width="900" border="0" align="center" class="btn-success">
    <tr >
      <td align="center" valign="middle" class="label-info" >
      <div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" ><i class="fa fa-home fa-1.5x"></i></a></li>
								<li class="dropdown"><a href="otop.php">สินค้าโอทอป<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="food.php">อาหาร</a></li>
										<li><a href="beverage.php">เครื่องดื่ม</a></li>
										<li><a href="apparel.php">ผ้าเครื่องแต่งกาย</a></li>
										<li><a href="apparatus.php">ของใช้ ของประดับ...</a></li>
										<li><a href="herb.php">สมุนไพรที่ไม่ใช่อาหาร</a></li>
                                    </ul>
								<li><a href="Province.php">โอทอปจังหวัด</a></li>
                                <li><a href="datasupplier.php">ผู้ผลิตโอทอป</a></li>
                                <li><a href="dataotop.php">หมู่บ้านโอทอป</a></li>
                                <li class="dropdown"><a href="datacustomer.php">กิจกรรม<i class="fa fa-angle-down"></i></a>
                                    	<ul role="menu" class="sub-menu">
 										<li><a href="datacustomer.php">ข้อมูลสมาชิก</a></li>
										<li><a href="dataoder.php">รายการที่สั่งซื้อ</a></li>                                         </ul>
                                <li><a href="eco.php">สอบถามเพิ่ม...</a></li>

							</ul>
						</div>
					</div>
      </td>
    </tr>
  </table>
  </form>

  <form action="" method="post" name="form3" class="label-default" >
    <table width="900" border="0" align="center" class="label-default">
      <tr>
        <td><h3>ตะกร้าสินค้า</h3></td>
      </tr>
    </table>
</form>
<br>


<section id="cart_items">

<div class="container">

  <div class="table-responsive cart_info">
    <table class="table table-condensed">
    <thead>
      <tr class="cart_menu"></tr>
    </thead>
    <thead>
      <tr class="cart_menu">
        <td >&nbsp;ลำดับ</td>
        <td width="18%" >&nbsp;</td>

        <td >&nbsp;รายการสินค้า</td>
        <td >&nbsp;ราคาต่อชิ้น</td>
        <td >&nbsp;จำนวน</td>
        <td width="13%" >&nbsp;ราคารวม</td>
      </tr>
    </thead>
    <?php
if (isset($_SESSION['pid'])) {
	foreach($_SESSION['pid'] as $b) {
		$y++;
		$total += $_SESSION['pprice'][$b] * $_SESSION['pitem'][$b] ;
		$sum = $_SESSION['pprice'][$b] * $_SESSION['pitem'][$b];
?>
    <tbody>
      <tr>
        <td class="cart_price"><p>
          <?=$y?>
        </p></td>
        <td width="18%" class="cart_product"><img src="images/<?=$_SESSION['pid'][$b];?>.jpg" width="80" height="80" /></td>
        <td width="30%" class="cart_description"><h4><a href="">
          <?=$_SESSION['pname'][$b];?>
        </a></h4>
          <p>รหัสสินค้า:
            <?=$_SESSION['pid'][$b];?>
          </p></td>
        <td class="cart_price"><p>
          <?=number_format($_SESSION['pprice'][$b],0);?>
        </p></td>
        <td class="cart_quantity"><?=$_SESSION['pitem'][$b];?></td>
        <td class="cart_total"><p class="cart_total_price"> <?php echo number_format($sum, 2);?></p></td>
      </tr>
      <?php
	}
}
?>
    </tbody>
    <thead>
    </thead>
    </table>
  </div>
</div>
<div class="container">
  <div class="table-responsive cart_info">
  <table width="90%" border="0">
  <tr>
    <td align="right" class="text-info"> <h3>ราคาสินค้าทั้งหมด  :  <?=number_format($total,2);?></h3></td>
  </tr>
</table>
  </div>
</div>
</section>

<center>
  <h3><a href="otop.php"><i class="fa fa-reply " aria-hidden="true"></i> กลับไปเลือกสินค้า</a> &nbsp;&nbsp;&nbsp; <a href="clear.php?id"><i class="fa fa-times " aria-hidden="true"></i>ยกเลิกรายการทั้งหมด</a>&nbsp;&nbsp;&nbsp;&nbsp;


    <a href="oder.php">  <i class="fa fa-check " aria-hidden="true"></i> สั่งซื้อสินค้า</a></h3>
</center>
<br>
<br>

<?php //บันทึกข้อมูล
if ($_GET['act']=="confirm") {
	include("tt1.php") ;
	$sql2 = "insert into `order` values('', '$total', CURRENT_TIMESTAMP, '".$_SESSION['ses_id']."')" ;
	mysql_query($sql2) or die ("insert order ไม่ได้") ;
	$oid = mysql_insert_id() ;

	foreach($_SESSION['pid'] as $z) {
$sql3 = "insert into order_detail values('$oid', '".$_SESSION['pid'][$z]."', '".$_SESSION['pitem'][$z]."')" ;
		mysql_query($sql3) or die ("insert order_detail ไม่ได้") ;
	}

	echo "<script>" ;
	echo "alert('การสั่งซื้อเสร็จสมบูรณ์');" ;
	echo "window.location='clear.php';" ;
	echo "</script>" ;

}
?>

</body>
</html>
