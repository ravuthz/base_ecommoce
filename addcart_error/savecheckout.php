<?php
session_start();
include('tt1.php');
$Total = 0;
$SumTotal = 0;
$strSQL = "INSERT INTO orders (OrderDate,Name,Address,Tel,Email) VALUES ('".date("Y-m-d H:i:s")."','".$_POST["txtName"]."','".$_POST["txtAddress"]."' ,'".$_POST["txtTel"]."','".$_POST["txtEmail"]."')";
mysqli_query($link,$strSQL) or die(mysql_error());
$strOrderID = mysql_insert_id();
for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
{
if($_SESSION["strProductID"][$i] != "")
{
$strSQL = "INSERT INTO orders_detail (OrderID,ProductID,Qty) VALUES ('".$strOrderID."','".$_SESSION["strProductID"][$i]."','".$_SESSION["strQty"][$i]."')";
mysql_query($link,$strSQL) or die(mysql_error());
}
}
mysql_close();
session_destroy();
header("location:finishOrder.php?OrderID=".$strOrderID);
?>
