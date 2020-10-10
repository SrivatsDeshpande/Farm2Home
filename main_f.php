<html>
<?php
session_start();
echo "Welcome, ". $_SESSION['name'];
$username=$_SESSION['username'];
?>

<div class="img">
	<form method ="post">
	<img src="tomato.png"  alt="tomato" id="1" width="200px"> <input type="text" name="to_qty" value="0" placeholder="ENTER QUANTITY(KG)"><input type="text" name="to_cost" value="0" placeholder="ENTER COST(KG)"><br>
	<img src="onion.png" id="1 " alt="onion" width="200px"> <input type="text" name="on_qty" value="0" placeholder="ENTER QUANTITY(KG)"><input type="text" name="on_cost" value="0" placeholder="Enter COST(KG)"><br>
	<img src="potato.jpg" id="1" alt="potato" width="200px"> <input type="text" name="po_qty" value="0" placeholder="ENTER QUANTITY(KG)"><input type="text" name="po_cost" value="0" placeholder="Enter COST(KG)">
	<input type="submit" value="Submit">
</form>
</div>



<?php
$tom="tomato";
$onion="onion";
$potato="potato";
$arr= array("0" =>array($_POST['to_qty'],$_POST['to_cost']), "1"=> array($_POST['on_qty'],$_POST['on_cost']), "2"=> array($_POST['po_qty'],$_POST['po_cost']));
$sql="insert into products(username,product,quantity,price) values ('$username','$tom',$arr['0'][0],$arr['0'][1])";
$res=mysqli_query($conn,$sql);
echo $res['product'];

?>

</html>
