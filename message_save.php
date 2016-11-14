
<meta charset="utf-8">
<?pHP
include"tt1.php";
if ( $_POST[telephone]!="" or
$_POST[email]!="" or
$_POST[address]!=""
){
	$mysql="insert into contact values(
	'".$_POST[telephone]."','".$_POST[email]."','".$_POST[detail]."'
	)";
	$result=mysql_db_query($link,$mysql);
	echo "<script>alert(' the data have been inserted');window.location='message_insert.php';</script>";
	} else {echo "<script>alert('cannot insert into the database');window.location='message_insert.php';</script>";
	}
?>
