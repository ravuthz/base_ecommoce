
<<?php
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
<!DOCTYPE html>
<html lang="en">
<link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" type="text/css">
<link href="assets/ItemSlider/css/demo.css" rel="stylesheet" type="text/css">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bootstrap E-Commerce Template- DIGI Shop mini</title>
    <!-- Bootstrap core CSS -->
    <link href="bs-digishop-mini/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="bs-digishop-mini/assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="bs-digishop-mini/assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="bs-digishop-mini/assets/css/style.css" rel="stylesheet" />
    <style>
    img {
	width:200px;
	height:200px;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
}
    </style>
</head>
<body>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.login.php"><strong>DIGI</strong> Shop</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="view_order.php" id="nav-cart"><span id="nav-cart-number" class="badge pull-right">0</span>
      			<span class="glyphicon glyphicon-shopping-cart"></span>
    		</span></a></li>
                    <li><a href="ff1.php">หาสินค้า</a></li>
                    <li><a href="ff.php">sell</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="profile.php"><?php echo $_SESSION['Username']; ?></a></li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="Enter Keyword Here ..." class="form-control">
                    </div>
                    &nbsp;
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row"><!-- /.col --><!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="#" class="list-group-item active">Electronics
                    </a>
                    <ul class="list-group">

                        <li class="list-group-item">
                          <?php echo $_SESSION['Username']; ?>
                        </li>
                        <li class="list-group-item">
                        </li>
                        <li class="list-group-item">Tablets
                         <span class="label label-danger pull-right">4</span>
                        </li>
                        <li class="list-group-item">Appliances
                             <span class="label label-info pull-right">434</span>
                        </li>
                        <li class="list-group-item">Games & Entertainment
                             <span class="label label-success pull-right">34</span>
                        </li>
                    </ul>
                </div>
                <!-- /.div -->
                <div>
                    <a href="#" class="list-group-item active list-group-item-success">Clothing & Wears
                    </a>
                    <ul class="list-group">

                        <li class="list-group-item">Men's Clothing
                             <span class="label label-danger pull-right">300</span>
                        </li>
                        <li class="list-group-item">Women's Clothing
                             <span class="label label-success pull-right">340</span>
                        </li>
                        <li class="list-group-item">Kid's Wear
                             <span class="label label-info pull-right">735</span>
                        </li>

                    </ul>
                </div>
                <!-- /.div -->
                <div>
                    <a href="#" class="list-group-item active">Accessaries & Extras
                    </a>
                    <ul class="list-group">
                        <li class="list-group-item">Mobile Accessaries
                             <span class="label label-warning pull-right">456</span>
                        </li>
                        <li class="list-group-item">Men's Accessaries
                             <span class="label label-success pull-right">156</span>
                        </li>
                        <li class="list-group-item">Women's Accessaries
                             <span class="label label-info pull-right">400</span>
                        </li>
                        <li class="list-group-item">Kid's Accessaries
                             <span class="label label-primary pull-right">89</span>
                        </li>
                        <li class="list-group-item">Home Products
                             <span class="label label-danger pull-right">90</span>
                        </li>
                        <li class="list-group-item">Kitchen Products
                             <span class="label label-warning pull-right">567</span>
                        </li>
                    </ul>
                </div>
                <!-- /.div -->
                <div>
                </div>
                <!-- /.div -->

                <!-- /.div -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Electronics</li>
                    </ol>
                </div>
                <!-- /.div -->
                <div class="row"></div>
                <!-- /.row -->

                <div class="row"><!-- /.col -->

                </div>
                <!-- /.div -->
                <div class="col-md-12">
                  <div class="col-md-12">
                  <div class="row">

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
                        <td align="center"><img src="images/<?=$_SESSION['pic_name'][$b]?>" style="width:150px"></td>
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
                  </div>
                </div>

                <!-- /.row -->
                <div class="row"><!-- /.col --><!-- /.col --><!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->


    <!--Footer -->
    <div class="col-md-12 footer-box">


        <div class="row small-box ">
            <strong>Mobiles :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
              <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> |
            <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
            <a href="#">Sony</a> | <a href="#">Microx</a> | view all items

        </div>
        <div class="row small-box ">
            <strong>Laptops :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx Laptops</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
              <a href="#">Sony Laptops</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> |
            <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
            <a href="#">Sony</a> | <a href="#">Microx</a> | view all items
        </div>
        <div class="row small-box ">
            <strong>Tablets : </strong><a href="#">samsung</a> |  <a href="#">Sony Tablets</a> | <a href="#">Microx</a> |
            <a href="#">samsung </a>|  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
              <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung Tablets</a> |  <a href="#">Sony</a> |
            <a href="#">Microx</a> |<a href="#">samsung Tablets</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
            <a href="#">Sony</a> | <a href="#">Microx Tablets</a> | view all items

        </div>
        <div class="row small-box pad-botom ">
            <strong>Computers :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung Computers</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
              <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> |
            <a href="#">Microx Computers</a> |<a href="#">samsung Computers</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx Computers</a> |<a href="#">samsung</a> |
            <a href="#">Sony</a> | <a href="#">Microx</a> | view all items

        </div>

        <hr>
    </div>
    <!-- /.col -->
    <div class="col-md-12 end-box ">
        &copy; 2014 | &nbsp; All Rights Reserved | &nbsp; www.yourdomain.com | &nbsp; 24x7 support | &nbsp; Email us: info@yourdomain.com
    </div>
    <!-- /.col -->
    <!--Footer end -->
    <!--Core JavaScript file  -->
    <script src="bs-digishop-mini/assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="bs-digishop-mini/assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    <script src="bs-digishop-mini/assets/ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="bs-digishop-mini/assets/ItemSlider/js/jquery.catslider.js"></script>
    <script>
        $(function () {

            $('#mi-slider').catslider();

        });
		</script>

</body>
</html>
