
<?php
session_start();
include("tt1.php");
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
                   <li><a href="#">เช็กการสังซื้อ</a></li>
                  <li><a href="Viewpayment.php">เช็กการชำระเงินของลูกค้า</a></li>
                  <li><a href="customerProduct.php">หาสินค้า</a></li>
                  <li><a href="customerInformation.php">สินค้าของลูกค้</a></li>
                  <li><a href="sellAdmin.php">sell</a></li>
                  <li><a href="logout.php">Logout</a></li>
                  <li><a href="profileAdmin.php"><?php echo $_SESSION['Username']; ?></a></li>
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

                        <li class="list-group-item">Mobile
      <span class="label label-primary pull-right">234</span>
                        </li>
                        <li class="list-group-item">Computers
                      <span class="label label-success pull-right">34</span>
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
                    <form class="" action="index.html" method="post">
                      <?php
                      $m_id = $_SESSION['m_id'];
                      $sql="select*from payment ";
                      $result=mysqli_query($link,$sql);
                      while ($row=mysqli_fetch_array($result)){
                        ?>
                      <table width="445" border="1" align="center" class="table-bordered" style="width:360px;">
                        <tr>
                          <td colspan="2" align="center">
                            <img  src="images/<?php echo $row['picture'];?>" style="width:460px; height:350px;">
                          </td>
                        </tr>
                        <tr>
                          <td width="182" height="39">
                           <h5>Payer name</h5>
                          </td>
                          <td width="247">
                                 <?php echo $row['pur_name'] ?>
                          </td>
                        </tr>
                        <tr>
                          <td height="41">
                          <h5>Phone number</h5>
                          </td>
                          <td>
                             <?php echo $row['phone'] ?>
                          </td>
                        </tr>
                        <tr>
                          <td height="42">
                          <h5>Pay amount</h5>
                          </td>
                          <td>
                           <?php echo $row['amount'] ?>
                          </td>
                        </tr>
                        <tr>
                          <td height="79">
                          <h5>Customer who get money</h5>
                          </td>
                          <td>
                          <table width="200" height="80" border="0" cellpadding="1" cellspacing="1" class="table-responsive">
                            <tbody>
                              <tr width="200">
                                <td height="40"><?php echo $row['bank_acc_name']; ?></td>
                              </tr>
                              <tr>
                                <td height="40"><?php echo $row['bank_acc_number']; ?></td>
                              </tr>

                            </tbody>
                          </table>

                          </td>
                        </tr>
                        <tr>
                              <td height="49">
                              <h5>Payment date</h5>
                              </td>
                              <td>
                              <?php echo $row['date_pay']; ?>
                              </td>
                        </tr>
                      </table>
                      <?php }?>

                    </form>

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
            <!-- /.col -->
        </div>
        <!-- /.row -->
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
