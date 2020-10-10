<html>
<?php
session_start();
$servername="localhost";
$username="root";
$password="root";
$conn=new mysqli($servername,$username,$password);
$sql="use hack";
mysqli_query($conn,$sql);

echo "Welcome, ". $_SESSION['name']."<br>";
?>

<style>
  input
  {
    border-radius: 7px;
    width: 150px;
    height: 40px;
  }
  select
  {
    border-radius: 7px;
    width: 150px;
    height: 40px;

  }


</style>

<br>

<form method ="post">
	<h1>List products here (उत्पादनांची यादी करा)</h1>
		<select name="product" >
  
  <option value="tomato"> Tomato (टोमॅटो)</option>
  <option value="onion"> Onion (कांदा)</option>
  <option value="potato"> Potato (बटाटा)</option>
  <option value="apple">Apple (सफरचंद)</option>
  <option value="mango"> Mango (आंबा)</option>
  <option value="orange"> Orange (संत्रे) </option>
</select> <br><h1>State quantity and price here(येथे प्रमाण आणि किंमत जाहीर करा)</h1>
	<input type="text " name="qty" placeholder="ENTER QUANTITY(प्रमाण)"><br>
	<input type="text" name="price" placeholder="ENTER PRICE (किंमत)"><br>
	<input type="Submit" value="सबमिट करा">

</form>

<?php
$username=$_SESSION['username'];

$selected_val=$_POST['product'];
$_SESSION['product']=$selected_val;
$qty=$_POST['qty'];
$_SESSION['qty']=$qty;
$price=$_POST['price'];
$_SESSION['price']=$price;
$sql="insert into products(username,product,quantity,price) values ('$username','$selected_val',$qty,$price)";
mysqli_query($conn,$sql);
echo "<a href='login1.html'>LOG OUT </a>";
?>

</html>