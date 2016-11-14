<?php
session_start();
include("tt1.php");//เชื่อมต่อฐานข้อมูล
?>
<?php
$msg="";
if (isset($_POST['submit']))
 {
	 //$target="images/".basename($_FILES['pimage']['name']);
	///$db=mysql_connect("localhost","root","1234","dbmimage");

  //$id=$_FILES['id'];
  //$m_id=$_POST['m_id'];
  //$_SESSION['ID']=$m_id
   $seller_id = $_SESSION['m_id'];
//	$image=$_FILES['pimage']['name'];
  //var_dump($sql);
  //print_r( $shopname);
   //$shop_name=$_POST['shop_name'];
   $shopname=$_POST['shop_name'];
   $Identify_card=$_POST['Identify_card'];
  $Warehouse_adr=$_POST['Warehouse_adr'];
  $city_province=$_POST['city_province'];
	 $postal_code=$_POST['postal_code'];
	 $bank_name=$_POST['bank_name'];
	 $bank_acc_name=$_POST['bank_acc_name'];
	 $bank_acc_num=$_POST['bank_acc_num'];
	 //$seller_tel=$_POST['seller_tel'];
	 $sql="insert into sale values ('','$shopname','$Identify_card', '$Warehouse_adr','  $city_province',' $postal_code','$bank_name','$bank_acc_name',' $bank_acc_num',' $seller_id')";
   mysqli_query($link,$sql)or die(mysqli_error($link));
  //if(move_uploaded_file($_FILES['pimage']['tmp_name'],$target))
      // {
   echo"<script>";
  echo"alert('เพิ่มข้อมูลนิสิตเรียบร้อยแล้ว');";
   echo"window.location='ff.php';";
  echo"</script>";
    //$msg="Uploaded successfully";
  // }else
     //{
     //$msg="There was a problem uplouding image";
  //  }
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
  <!---container---->
  <div class="container">
    <div class="col-md-4">

    </div>
    <div class="col-md-8">
      <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table>
    <tr>
      <td>
        <label width="136" height="38">Shop name</label>
        <input class="form-control"  width="" type="text" name="shop_name" id="id" />
      </td>
    </tr>
    <tr>
      <td>
        <label for="paddress">Identify card/รหัสประชาชนหรือ passport</label>
        <input class="form-control"  width="" type="text" name="Identify_card" id="id" />
      </td>
    </tr>
    <tr>
      <td>
        <label for="b_name">Warehouse/ กลังที่เก็บสินค้าไว้ </label>
        <textarea class="form-control"  name="Warehouse_adr"  cols="45" rows="5"></textarea>
      </td>
    </tr>
    <tr>
      <td>
        <label for="b_name">City/province</label>
        <input class="form-control"  type="text" name="city_province" id="id" />
      </td>
    </tr>
    <tr>
      <td>
        <label for="b_name">postal code</label>
        <input class="form-control"  type="text" name="postal_code" id="id" />
      </td>
    </tr>
    <tr>
      <td>
        <label for="">Bank name</label>
          <select  name="bank_name" class="form-control" >
      <option>ธนาคารทหารไทย</option>
      <option>ธนาคารไทยพาณิชย์</option>
      <option>ธนาคารกรุงเทพ</option>
      <option>ธนาคารกรุงศรีอยุธยา </option>
      <option>ธนาคารยูโอบี</option>
      <option>ธนาคารกรุงศรีอยุธยา</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>
        <label for="">  Bank account name</label>
        <input class="form-control"  type="text" name="bank_acc_name" value="">
      </td>
    </tr>
    <tr>
      <td>
        <label for="">Bank account number</label>
        <input class="form-control"  type="text" name="bank_acc_num" value="">
      </td>
    </tr>
    <tr>
      <td>
          <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Processing" />
      </td>
    </tr>
      </table>

      </form>
    </div>
    <div class="">
    </div>
  </div>

</body>
</html>
