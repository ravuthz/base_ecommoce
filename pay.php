<?php
session_start();
include("tt1.php");//เชื่อมต่อฐานข้อมูล
?>
<?php
if (isset($_POST['submit'])){
	$target="images/".basename($_FILES['picture']['name']);
	$image=$_FILES['picture']['name'];
	$pur_name=$_POST['pur_name'];
	$phone=$_POST['phone'];
	$amount=$_POST['amount'];
	$detail=$_POST['detail'];
		$bank_name=$_POST['bank_name'];
			$bank_acc_name=$_POST['bank_acc_name'];
			 $bank_acc_num=$_POST['bank_acc_number'];
					 $m_id = $_SESSION['m_id'];
						$date= date("Y-m-d h:i:sa", time());
					//	print_r($m_id);
				//	var_dump($sql);
	$sql="insert into payment values ('','$pur_name','$phone','$amount','$detail','$image','$bank_name','$bank_acc_name','$bank_acc_num','$m_id','$date')";
	mysqli_query($link,$sql) or die ("Cannot in pay");
	if(move_uploaded_file($_FILES['picture']['tmp_name'],$target))
	    {
echo"<script>";
echo"alert('เพิ่มข้อมูลนิสิตเรียบร้อยแล้ว');";
//echo"window.location='form.index.php';";
echo"</script>";
		//$msg="Uploaded successfully";
		}else
		{
			echo"<script>";
echo"alert('เthere is a probleme');";
//echo"window.location='form.index.php';";
echo"</script>";
		}
 }

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
                  
                  <li><a href="sell.php">sell</a></li>
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
                    <a href="#" class="list-group-item active">ตารางข้อมูลต่างๆ
                    </a>
                    <ul class="list-group">

                        <li class="list-group-item">
                          <a href="custData.php" class="list-group-item active">ข้อมูลลูกค้า
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="ff.php" class="list-group-item active">ประกาศขาย
                          </a>
                        <li class="list-group-item">
                         <a href="pay.php" class="list-group-item active">การชำระเงิน
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="product_Edit_delete.php" class="list-group-item active">แก้ไข&ลบสินค้า
                           </a>
                        </li>
                        <li class="list-group-item">Games & Entertainment
                             <span class="label label-success pull-right">34</span>
                        </li>
                    </ul>
                </div>
                <!-- /.div -->

                <!-- /.div -->

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
									<div class="row">
								<div class="">

								</div>
                <div class="">

								<div class="">
									<form method="post" enctype="multipart/form-data" name="form1" id="form1">

  					        <table align="center" width="616" border="0" cellspacing="1" cellpadding="1">
  					          <tbody>
  					            <tr>
  					              <td width="305"><label for="textfield">Your name <br>
  					              </label>
  					              <input style="width:250px;"  class="form-control" type="text" name="pur_name" id="textfield"></td>
  					              <td width="298"><label for="textfield5">Bank Name<br>
  					              </label>
  					              <input style="width:250px;"  class="form-control" type="text" name="bank_name" id="textfield5"></td>
  					            </tr>
  					            <tr>
  					              <td><label for="textfield2">Your phone number <br>
  					              </label>
  					              <input style="width:250px;"  class="form-control" type="text" name="phone" id="textfield2"></td>
  					              <td><label for="textfield6">Bank account name <br>
  					              </label>
  					              <input style="width:250px;"   class="form-control" type="text" name="bank_acc_name" id="textfield6"></td>
  					            </tr>
  					            <tr>
  					              <td><label for="textfield3">Pay amount<br>
  					              </label>
  					              <input style="width:250px;"  class="form-control" type="text" name="amount" ></td>
  					              <td>
  					              <label for="textfield7">Bank account number <br>
  					              </label>
  					              <input style="width:250px;"  class="form-control" type="text" name="bank_acc_number"></td>
  					            </tr>
  					            <tr>
  					              <td>
  					 				 <label for="textfield4">Description<br>
  					              </label>
  					              <textarea style="width:250px; height:50px;"  class="form-control" name="detail" id="textarea"></textarea></td>
  					              <td><label for="fileField">Image payment :</label>
  					              <input name="picture" style="width:100px;"  type="file" class="box-border" id="fileField"></td>
  					            </tr>
  					            <tr>
  					              <td height="52" colspan="2" align="center"><input name="submit" type="submit" class="bg-primary" id="submit" value="Submit"></td>
  					            </tr>

  					          </tbody>
  					        </table>

  					        <p>&nbsp;</p>
  					      </form>

								</div>
								</div>
								</div>
                <div class="row"><!-- /.col -->

                </div>
   <div class="row">

   </div>
   <div class="col-lg-4">
   </div>
</body>
</html>
