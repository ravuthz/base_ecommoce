<!DOCTYPE html>
<html lang="en">

<head>

   


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom Fonts -->


</head>

<body>

   

            
      
            
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       
                        </h1>
                        <ol class="breadcrumb">
                           
                <!-- /.row -->

             <body>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6"> <br />
      <h4 align="center"> ฟอร์มเพิ่มสินค้าบอส </h4>
      <hr />
      
      <form  name="addproduct" action="" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <p> ชื่อสินค้า</p>
            <input type="text"  name="p_name" class="form-control" required placeholder="ชื่อสินค้า" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p>ชื่อร้านค้า</p>
           <input type="text"  name="r_name" class="form-control" required placeholder="ชื่อร้านค้า" />
          </div>
          </div>
           <div class="form-group">
          <div class="col-sm-12">
                 <p>เบอร์</p>
            <input type="text"  name="t_name" class="form-control" required placeholder="เบอร์์" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> รายละเอียดสินค้า </p>
            <textarea name="p_detail" class="form-control"  rows="3"  required placeholder="รายละเอียดสินค้า"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3">
            <p> ราคา (บาท) </p>
            <input type="number"  name="p_price" class="form-control" required placeholder="ราคา" />
          </div>
          <div class="form-group">
           <div class="col-sm-5">
            <p> ภาพสินค้า </p>
            <input type="file" name="p_img" class="form-control" />
          
        </div>
        <div class="form-group">
          <div class="col-sm-3">
            <p> หมวดสินค้า </p>
           <select name="Category" id="Category" class="box">
     <option value="" selected=""></option>
<option value="1">เสื้้อ</option>
<option value="2">รองเท้า</option>
<option value="3">เครื่องใช้ไฟฟ้า</option>
<option value="4">เครื่องดนตรี</option>
<option value="5">กีฬา</option>
<option value="6">สมาทโฟน</option>
<option value="7">คอมพิวเตอร์</option>
<option value="8">สัตว์เลี้ยง</option>
	 
    </select>
          </div>
          </div>
        <div class="form-group">
            <div class="col-md-1"></div>
    <div class="col-md-0"> 
                <button type="submit" class="btn btn-primary" name="btnadd"> + เพิ่มสินค้า </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
                

                

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

