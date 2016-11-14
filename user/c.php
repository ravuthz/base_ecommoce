<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">


<div class="panel panel-info" style="width:70%;margin-left:1;margin-right:auto;">
	<div class="panel-heading">ข้อมูลส่วนตัว </div>
  	<div class="panel-body">
<!-- ส่งแบบฟอร์มไปยังไฟล์ processProfile.php -->
<form method="post" action="processProfile.php?profileKey=d8858a4aeba0e4b475091959dba79fda&amp;action=edit" enctype="multipart/form-data" name="frmAddUser" id="frmAddUser" onsubmit="return checkRegisterInfo();">
 <table class="table" align="center" border="0" cellpadding="5" cellspacing="1" width="500">
  <tbody><tr> 
   <td class="" width="150">ขื่อ</td>
   <td class=""> <input name="txtUserName" class="box" id="txtUserName" size="32" maxlength="32" value="" disabled="true" type="text"></td>

  </tr><tr> 
   <td class="" width="150">นามสกุล</td>
   <td class=""> <input name="txtUserEmail" class="box" id="txtUserEmail" size="32" maxlength="32" value="" disabled="true" type="text"></td>
  </tr>
    <tr> 
   <td class="" width="150">ชื่อผู้ใช้</td>
   <td class=""> <input name="txtUserFirstName" class="box" id="txtUserFirstName" size="32" maxlength="32" value="" disabled="true" type="text"></td>
  </tr>
  <tr> 
   <td class="" width="150">รหัสผ่าน</td>
   <td class=""> <input name="txtUserLastName" class="box" id="txtUserLastName" size="32" maxlength="32" value="" disabled="true" type="text"></td>
  </tr>
  <tr> 
   <td class="" width="150">อีเมล์</td>
   <td class=""> <input name="txtUserPhone" class="box" id="txtUserPhone" size="32" maxlength="32" value="" disabled="true" type="text"></td>
  </tr>
  <tr> 
   <td class="" width="150">หมายเลขโทรศัพท์</td>
   <td class=""> <input name="txtUserAddress" class="box" id="txtUserAddress" size="50" maxlength="50" value="" disabled="true" type="text"></td>
  </tr>
  
  <tr> 
   <td class="" width="150">ที่อยู่</td>
   <td class=""> <input name="txtUserCity" class="box" id="txtUserCity" size="100" maxlength="100" value="" disabled="true" type="text"></td>
  </tr>
 
  </tbody></table>
  
 <p align="center"> 
  	&nbsp;&nbsp;<input name="btnAddUser" id="btnAddUser" value="แก้ไขข้อมูล" class="btn btn-danger" type="submit">

 </form>
</div>
</div>

