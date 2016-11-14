<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>show cart</title>
  </head>
  <?php
if(!isset($_SESSION["intLine"]))
{
echo "Cart empty";
exit();
}
include('tt1.php');
?>
  <body>
<table width="400" border="1">
  <tr>
    <td>Product</td>
      <td>Poduct name</td>
        <td>Price</td>
          <td>Quantity</td>
            <td>Total amount</td>
              <td>delete</td>
  </tr>
  <?php
    $total=0;
    $sumTotal=0;
    for ($i=0; $i <=(int)$_SESSION['intline'] ; $i++) {
      if($_SESSION['strProductID'][$i]!=""){

        $sql="select*from pic where id='".$_SESSION['strProductID']."'";
        $result=mysqli_query($link,$sql);
        $row=mysqli_fetch_array($result);
        $sumTotal=$sumTotal+$total;
        ?>
        <tr>
            <td><?php echo $_SESSION['strProductID'][$i]; ?></td>
              <td><?php echo $row['b_name']; ?></td>
                <td><?php echo $row['b_price'] ;?></td>
                  <td><?php echo $row['strQTY']; ?></td>
                    <td><?php echo number_format($total,2); ?></td>
                      <td><td><a href="delete.php?Line=<?php echo $i;?>">delete</a></td></td>
        </tr>
        <?php
      }
    }
   ?>
</table>
Sum Total <?php echo number_format($SumTotal,2);?>
<br><br><a href="product.php">Go to Product</a>
<?php
if($SumTotal > 0)
{
?>
| <a href="checkout.php">CheckOut</a>
<?php
}
?>  </body>
</html>
