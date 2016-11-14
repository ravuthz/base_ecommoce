
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


<html>
<head>
<title></title>
 

<body>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-8"> <br />
<form action="payment.php" method="post" name="frmMain">
  <td class="navArea" valign="top" width="500"><p>&nbsp;</p>

    <td class="contentArea" valign="top" width="600"><table border="0" cellpadding="20" cellspacing="0" width="60%">
        <tbody><tr>
          <td>

 <table class="table table-bordered" align="center" border="0" cellpadding="2" cellspacing="1" width="78%">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<td width="182" bgcolor="#FFFFFF" class=catbox><font color=#FC245C><b>แจ้งชำระเงิน</b></b></font></td>
</tr>

<tr>
<td>ส่งถึง</td>
<td width="412"><input name="txtTo" type="text" id="txtTo" value=""></td>
</tr>
<tr>
<td>เลขที่ใบสั่งซื้อ</td>
<td><input name="txtid" type="text" id="txtid"></td>
</tr>
<tr>
<td>ชื่อ-นามสกุล <span class="style1">*</span></td>
<td><input name="txtFormName" type="text"></td>
</tr>
<tr>
<td>เบอร์โทรศัพท์ <span class="style1">*</span></td>
<td><input name="txtphone" type="text" id="txtphone"></td>
</tr>
<tr>
<tr>
<td>อีเมล์ <span class="style1">*</span></td>
<td><input name="txtFormEmail" type="text"></td>
</tr>
<tr>
<td>จำนวนเงิน <span class="style1">*</span></td>
<td><input name="txttotal" type="text" id="txttotal">
บาท</td>
</tr>


<tr>
<td width="34%" valign="top"><div align="center"> <strong> </strong> </div>

<strong>
ชำระเข้าธนาคาร </strong><font class="red style1">**</font></td>
<td width="66%"><p>
<input name="rdoBank" type="radio" value="REG" onClick="JavaScript:frmMain.hdnBank.value='กสิกรไทย [730-2-44715-7]';">

กสิกรไทย  <br>
<input name="rdoBank" type="radio" value="REG" onClick="JavaScript:frmMain.hdnBank.value='กรุงไทย [690-0-00278-1]';">

กรุงไทย  <br>
<input name="rdoBank" type="radio" value="REG" onClick="JavaScript:frmMain.hdnBank.value='กรุงเทพ [068-0-16334-2]';">

กรุงเทพ  <br>
<input name="rdoBank" type="radio" value="REG" onClick="JavaScript:frmMain.hdnBank.value='ไทยพาณิชย์ [256-2-01317-7]';">

ไทยพาณิชย์  </p></td>
</tr>


<tr>
<td>หมายเหตุ</td>
<td><textarea name="txtDescription" cols="30" rows="2" id="txtDescription"></textarea></td>
</tr>

<tr bgcolor="#F9F9F9">
<td valign=top>วันที่ชำระเงิน <span class="style1">*</span></td><td><select name=txtdate>
<option value="0" selected>0
<option value="1">1
<option value="2">2<option value="3">3<option value="4">4<option value="5">5<option value="6">6<option value="7">7<option value="8">8<option value="9">9<option value="10">10<option value="11">11<option value="12">12<option value="13">13<option value="14">14<option value="15">15<option value="16">16<option value="17">17<option value="18">18<option value="19">19<option value="20">20<option value="21">21<option value="22">22<option value="23">23<option value="24">24<option value="25">25<option value="26">26<option value="27">27<option value="28">28<option value="29">29<option value="30">30<option value="31">31</select> <select name=mm>
<option value="0" selected>0
<option value="1">1
<option value="2">2<option value="3">3<option value="4">4<option value="5">5<option value="6">6<option value="7">7<option value="8">8<option value="9">9<option value="10">10<option value="11">11<option value="12">12</select> <select name=yy>
<option value="2008">2008
<option value="2009" >2009
<option value="2010" selected>2010
<option value="2011">2011
<option value="2012">2012
<option value="2013">2013
</select>
</tr>


<tr bgcolor="#F9F9F9">
<td valign=top>เวลาโดยประมาณ <span class="style1">*</span></td><td><select name=txtdate>
<option value="0" selected>0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
</select> : <select name=txtdate>
<option value="0" selected>0
<option value="1">1
<option value="2">2<option value="3">3<option value="4">4<option value="5">5<option value="6">6<option value="7">7<option value="8">8<option value="9">9<option value="10">10<option value="11">11<option value="12">12<option value="13">13<option value="14">14<option value="15">15<option value="16">16<option value="17">17<option value="18">18<option value="19">19<option value="20">20<option value="21">21<option value="22">22<option value="23">23<option value="24">24<option value="25">25<option value="26">26<option value="27">27<option value="28">28<option value="29">29<option value="30">30<option value="31">31<option value="32">32<option value="33">33<option value="34">34<option value="35">35<option value="36">36<option value="37">37<option value="38">38<option value="39">39<option value="40">40<option value="41">41<option value="42">42<option value="43">43<option value="44">44<option value="45">45<option value="46">46<option value="47">47<option value="48">48<option value="49">49<option value="50">50<option value="51">51<option value="52">52<option value="53">53<option value="54">54<option value="55">55<option value="56">56<option value="57">58<option value="59">59
</select>
<tr bgcolor="#F9F9F9"><td>รูป Slip </td><td><input type=file name=sem9><br><font class=small>(นามสกุลไฟล์ควรเป็น [ jpg , gif ] และขนาดไม่เกิน 100 Kb)</font></td></tr>







<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Send"></td>
</tr>
</table>
<br>
<br>
<br>
</form>
</body>
</html>