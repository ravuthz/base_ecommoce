<?php
session_start();
include("tt1.php");//เชื่อมต่อฐานข้อมูล
?>
<?php
//$msg="";
if (isset($_POST['submit']))
 {
	 $target="images/".basename($_FILES['pimage']['name']);
	///$db=mysql_connect("localhost","root","1234","dbmimage");

  //$id=$_FILES['id'];
  //$m_id=$_POST['m_id'];
  //$_SESSION['ID']=$m_id

   $m_id = $_SESSION['m_id'];
	 $image=$_FILES['pimage']['name'];
	 $text=$_POST['text'];
	 $b_name=$_POST['b_name'];
	 $b_price=$_POST['b_price'];
	 $city=$_POST['city'];
	 $seller_tel=$_POST['seller_tel'];
	 $sql="insert into pic values ('','$image','$text', '$b_name',' $b_price','$city','$seller_tel','$m_id')";
	mysqli_query($link,$sql)or die(mysqli_error($link));
	if(move_uploaded_file($_FILES['pimage']['tmp_name'],$target))
	    {
echo"<script>";
echo"alert('เพิ่มข้อมูลนิสิตเรียบร้อยแล้ว');";
//echo"window.location='form.index.php';";
echo"</script>";
		//$msg="Uploaded successfully";
		}else
		{
			$msg="There was a problem uplouding image";
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
      <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <table width="629" border="0" align="center" cellpadding="1" cellspacing="1" class="table-responsive" style="width:600px;">
            <tr>
              <td width="162" height="47" class="h5" >
                name
              </td>
              <td width="460">
                <input style="width:250px;" class="form-control"  type="text" name="b_name" id="id" />
              </td>
            </tr>
           <tr>
             <td height="109">
                <label for="paddress" class="h5">Detail</label>
             </td>
             <td>
                 <textarea style="width:290px;" class="form-control"  name="text" id="text" cols="45" rows="5"></textarea>
             </td>
           </tr>
            <tr>
              <td height="46">
                <label for="b_name" class="h5">price</label>
              </td>
              <td>
                <input style="width:250px;" class="form-control"  type="text" name="b_price" id="id" />
              </td>
            </tr>
           <tr>
              <td height="59">
                  <label for="b_name" class="h5">zone</label>
              </td>
              <td>
                  <input style="width:250px;" class="form-control"  type="text" name="city" id="id" />
             </td>
          </tr>
           <tr>
              <td height="44">
              <label for="b_name" class="h5">Phone number</label>
              </td>
              <td>
                  <input style="width:250px;" class="form-control" type="text" name="seller_tel" id="id" />
              </td>
           </tr>
          <tr>
            <td height="56">
               <label for="pimage">image</label>
            </td>
            <td>
                <input style="width:250px;" class="form-control" type="file" name="pimage" id="pimage" />
            </td>
          </tr>
        <tr>
          <td colspan="2" align="center" style="height:30px;">
          <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Processing" />
        </td>
          </tr>
      </div>
      </table>
    </form>
    </div>
    <div class="">

    </div>
  </div>

</body>
</html>
