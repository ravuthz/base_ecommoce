<meta charset="utf-8">
<?php
session_start();

if ($_GET['act'] == "del") {
	$id = $_GET['id'] ;
	unset($_SESSION['pro_id'][$id]) ;
	unset($_SESSION['pro_name'][$id]) ;
	unset($_SESSION['pro_price'][$id]) ;
	unset($_SESSION['pitem'][$id]) ;
} else {
	unset($_SESSION['pro_id']) ;
	unset($_SESSION['pro_name']) ;
	unset($_SESSION['pro_price']) ;
	unset($_SESSION['pitem']) ;
}


echo "<script>" ;
echo "window.location='viewOrder.php';" ;
echo "</script>" ;

?>
