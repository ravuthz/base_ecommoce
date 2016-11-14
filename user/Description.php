
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bootstrap E-Commerce Template- DIGI Shop mini</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- บอส -->
     <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>
<body>
	<div class="panel-heading">ข้อมูลส่วนตัว : bosswar555</div>
  	<div class="panel-body">
<!-- ส่งแบบฟอร์มไปยังไฟล์ processProfile.php -->
<form method="post" action="processProfile.php?profileKey=d0fb6360084de4360277fc05f6c25355&amp;action=edit" enctype="multipart/form-data" name="frmAddUser" id="frmAddUser" onsubmit="return checkRegisterInfo();">
 <table class="table" align="center" border="0" cellpadding="5" cellspacing="1" width="500">
  <tbody><tr> 
   <td class="" width="150">Username</td>
   <td class=""> <input name="txtUserName" class="box" id="txtUserName" size="32" maxlength="32" value="bosswar555" disabled="true" type="text"></td>
  	<input name="secretCode" value="itbookonline" <="" tr="" type="hidden">
  </tr><tr> 
   <td class="" width="150">อีเมล</td>
   <td class=""> <input name="txtUserEmail" class="box" id="txtUserEmail" size="32" maxlength="32" value="korolae@gmail.com" disabled="true" type="text"></td>
  </tr>
    <tr> 
   <td class="" width="150">ชื่อ</td>
   <td class=""> <input name="txtUserFirstName" class="box" id="txtUserFirstName" size="32" maxlength="32" value="" disabled="true" type="text"></td>
  </tr>
  <tr> 
   <td class="" width="150">นามสกุล</td>
   <td class=""> <input name="txtUserLastName" class="box" id="txtUserLastName" size="32" maxlength="32" value="" disabled="true" type="text"></td>
  </tr>
  <tr> 
   <td class="" width="150">โทรศัพท์</td>
   <td class=""> <input name="txtUserPhone" class="box" id="txtUserPhone" size="32" maxlength="32" value="" disabled="true" type="text"></td>
  </tr>
  <tr> 
   <td class="" width="150">ที่อยู่</td>
   <td class=""> <input name="txtUserAddress" class="box" id="txtUserAddress" size="50" maxlength="50" value=" " disabled="true" type="text"></td>
  </tr>
  
  <tr> 
   <td class="" width="150">เขต/อำเภอ</td>
   <td class=""> <input name="txtUserCity" class="box" id="txtUserCity" size="32" maxlength="32" value="" disabled="true" type="text"></td>
  </tr>
    <tr> 
   <td class="" width="150">จังหวัด</td>
   <td class=""> <input name="txtUserState" class="box" id="txtUserState" size="32" maxlength="32" value="" disabled="true" type="text"></td>
  </tr>
  <tr> 
   <td class="" width="150">รหัสไปรษณีย์</td>
   <td class=""> <input name="txtUserPostalCode" class="box" id="txtUserPostalCode" size="10" maxlength="10" value="" disabled="true" type="text"></td>
  </tr>
  </tbody></table>
  
 <p align="center"> 
   	<input name="btnChangePass" id="btnChangePass" value="เปลี่ยนรหัสผ่าน" onclick="window.location.href='processProfile.php?action=pass&amp;profileKey=d0fb6360084de4360277fc05f6c25355'" class="btn btn-primary" type="button">
  	&nbsp;&nbsp;<input name="btnAddUser" id="btnAddUser" value="แก้ไขข้อมูล" class="btn btn-danger" type="submit">
  	&nbsp;&nbsp;<input name="btnCancel" id="btnCancel" value="กลับไปยังร้านค้า" onclick="window.location.href='/boss/';" class="btn btn-success" type="button">  
 </p>
 </form>
</div>
