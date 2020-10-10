<html>
<?php
session_start();
$x = $_COOKIE['name'];
$y = $_COOKIE['quantity'];
$db=mysqli_connect("localhost","root","root","hack");
if(!$db) {
die("Connection Failed:".mysqli_connect_error());
}
$quan = preg_replace('/[^0-9]/', '', $y);
$sql = "SELECT * from products where product='$x' ";
$result = mysqli_query($db,$sql);
if(mysqli_num_rows($result)>0) {
while($val=mysqli_fetch_array($result)) {
$product=$val['product'];
$quantity=$val['quantity'];
$price=$val['price'];
}
$b=array("product"=>"$product","quantity"=>$quantity,"price"=>$price);
if(!array_push($_SESSION['cart'],$b)) {
echo "Ok";
} // Items added to cart
}

?>

<h2>CART</h2>
<br>

<p>Product selected is: <?php echo $product ?></p>
<p>Quantity selected is: <?php echo $quan ?>kg</p>
<p>Price is: ₹<?php echo $quan*$price ?>

</html>
