<?php
session_start();
 include("tt1.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" type="text/css">
    <link href="assets/ItemSlider/css/demo.css" rel="stylesheet" type="text/css">
    <title>tt</title>
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
                    <a class="navbar-brand" href="#"><strong>DIGI</strong> Shop</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="ff.php">sell</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        <li><a href="custData.php">Your Profile</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo	$_SESSION['Username']; ?><b class="caret"></b></a>
                        </li>
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
                      <div class="row">
                      <div class="col-lg-4">


                      </div>



                             <div class="col-md-4">
                             <div class="panel-primary">
                             <form class="" action="" method="post">
                               <?php
                               //$m_id = $_SESSION['m_id'];
                               $sql="select*from memberrigester ";
                               $result=mysqli_query($link,$sql);
                              while ($row=mysqli_fetch_array($result)) {
                                # code...


                                 ?>
                           <table align="left" class="table table-striped" width="100" >
                            <tr class="active">
                              <td>
                                <?php echo $row['Name']; ?>
                              </td>
                              <td>
                                  <?php echo $row['Address']; ?>
                              </td>
                            </tr>
                            <tr class="active">
                              <td width="50">
                                <?php echo $row['ID']; ?>
                              <td>
                              <td>
                              <?php echo $row['poststation']; ?>
                              </td>
                            </tr>
                            <tr class="active">
                              <td>
                                <?php echo $row['telephone']; ?>
                              </td>
                              <td>
                                <?php echo $row['Email']; ?>
                              </td>
                            </tr >
                            <tr class="active">
                              <td>
                                <td> <a href="custDelete.php?code=<?=$row['ID']?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                              </td>
                            </tr>
                           </table>

                   <?php   } ?>
                   </form>
                   </div>
                   </div>
                   <div class="col-lg-4">
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

  </body>
</html>
