<?php
session_start();
?>

<meta charset="utf-8">
<?php

if ($_GET['act'] == "del") {
	$id = $_GET['pro_id'] ;
	unset($_SESSION['pro_id'][$id]) ;
	unset($_SESSION['pname'][$id]) ;
	unset($_SESSION['pprice'][$id]) ;
	unset($_SESSION['pitem'][$id]) ;
} else {
	unset($_SESSION['pid']) ;
	unset($_SESSION['pname']) ;
	unset($_SESSION['pprice']) ;
	unset($_SESSION['pitem']) ;
}


echo "<script>" ;
echo "window.location='basket.php';" ;
echo "</script>" ;

?>
