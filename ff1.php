
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
                  <li><a href="ff1.php">หาสินค้า</a></li>
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
<h1></h1>
<h1><p></h1>
	  <div class="container">
			<?php
      $num_rec_per_page=12;
      if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
      $start_from = ($page-1) * $num_rec_per_page;
      $sql="select*from pic limit $start_from , $num_rec_per_page";
      $result=mysqli_query($link,$sql);
      ?>
      <?php
      while($row=mysqli_fetch_array($result)){
        ?>
			<table width="200" align="left" border="0" cellspacing="1" cellpadding="1">
			  <tbody>
			    <tr>
			      <td colspan="2">
			       <?php
			     echo "<img src='images/".$row['name']."'>";
			      ?>
			       </td>
			    </tr>
			    <tr>
			      <td> <?=$row['b_name'];?></td>
			      <td><?=$row['text'];?></td>
			    </tr>
			    <tr>
			      <td><?=$row['b_price'];?></td>
			      <td><?=$row['seller_tel'];?></td>
			    </tr>
			    <tr>
			      <td><?=$row['id'];?></td>
			      <td><?=$row['city'];?></td>
			    </tr>
			    <tr>
			      <td> <a href="delete.php?code=<?=$row['id']?>">delete</a></td>
			      <td><a href="edit.php?code=<?=$row['id']?>">edit</a></td>
			    </tr></tbody>

			</table>
				<?php  };
			?>
			<?php
      $sql = "SELECT * FROM pic";
      $rs_result = mysqli_query($link,$sql); //run the query
      $total_records = mysqli_num_rows($rs_result);  //count number of records
      $total_pages = ceil($total_records / $num_rec_per_page);

      echo "<a href='ff1.php?page=1'>".'|<'."</a> "; // Goto 1st page

      for ($i=1; $i<=$total_pages; $i++) {
                  echo "<a href='ff1.php?page=".$i."'>".$i."</a> ";
      };
      echo "<a href='ff1.php?page=$total_pages'>".'>|'."</a> "; // Goto last page
      ?>

		</div>

</body>
</html>
