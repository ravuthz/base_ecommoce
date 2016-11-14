<?php
session_start();
include("tt1.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
img {
	width:200px;
	height:100px;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
}
</style>
</head>

<body>
<h1></h1>
<h1><p></h1>
<?php
$sql="select*from pic";
$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result)){
	?>
<table width="200" align="left" border="0" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
      <td colspan="2">
       <?php
     echo "<img src='images/".$row['name']."'>";
      ?>
       </td>
    </tr>
    <tr>
      <td> <?=$row['b_name'];?></td>
      <td><?=$row['text'];?></td>
    </tr>
    <tr>
      <td><?=$row['b_price'];?></td>
      <td><?=$row['seller_tel'];?></td>
    </tr>
    <tr>
      <td><?=$row['id'];?></td>
      <td><?=$row['city'];?></td>
    </tr>
    <tr>
      <td> <a href="delete.php?code=<?=$row['id']?>">delete</a></td>
      <td><a href="edit.php?code=<?=$row['id']?>">edit</a></td>
    </tr></tbody>

</table>
	<?php  }
?>
</body>
</html>
