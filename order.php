<?php
ob_start();
session_start();
if(!isset($_SESSION["intLine"]))
{
$_SESSION["intLine"] = 0;
$_SESSION["strProductID"][0] = $_POST["id"];
$_SESSION["strQty"][0] = 1;
header("location:showorder.php");
}
else
{
$key = array_search($_POST["id"], $_SESSION["strProductID"]);
if((string)$key != "")
{
$_SESSION["strQty"][$key] = $_SESSION["strQty"][$key] + 1;
}
else
{
$_SESSION["intLine"] = $_SESSION["intLine"] + 1;
$intNewLine = $_SESSION["intLine"];
$_SESSION["strProductID"][$intNewLine] = $_POST["id"];
$_SESSION["strQty"][$intNewLine] = 1;
}
header("location:showorder.php");
}
?>
