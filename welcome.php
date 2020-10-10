<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
session_start();
?>
<script>

function fruits() {
var x = document.getElementById("ar");
var y = document.getElementById("ar1");
if(x.style.display=="block") {
x.style.display="none";
if(y.style.display=="block") {
y.style.display="none";
}
}
else {
x.style.display="block";
y.style.display="none";
}
}
function vege() {
var x = document.getElementById("ar1");
var y = document.getElementById("ar");
if(x.style.display=="block") {
x.style.display="none";
if(y.style.display=="block") {
y.style.display="none";
}
}
else {
x.style.display="block";
y.style.display="none";
}
}
function add(a) {
var name = document.getElementsByName("fruits[]");
var n=name[a].innerHTML;
var quant = document.getElementsByName("quantity[]");
var quantity=quant[a].value;
document.cookie="name="+n;
document.cookie="quantity="+quantity;
location.href="cart.php?item="+a;
}
var i=0;
function inc(b) {


if(i==3)
{document.getElementsByName("quantity[]")[b].value="1kg";}
if(i==4)
{document.getElementsByName("quantity[]")[b].value="2kg";}
if(i==5)
{document.getElementsByName("quantity[]")[b].value="5kg";}
i++;
}
function dec() {
if(i==5)
{document.getElementsByName("quantity[]")[b].value="2kg";}
if(i==4)
{document.getElementsByName("quantity[]")[b].value="1kg";}
if(i==3)
{document.getElementsByName("quantity[]")[b].value="750g";}
if(i==2)
{document.getElementsByName("quantity[]")[b].value="500g";}
if(i==1)
{document.getElementsByName("quantity[]")[b].value="250g";}
if(i==0)
{document.getElementsByName("quantity[]")[b].value="";}
i--;
}
</script>
<title>Farm2Home</title>
<body>
<h3>Farm2Home</h3>
<hr>
<a class="fruits" onclick=fruits()>Fruits</a>
<a class="vege" onclick=vege()>Vegetables</a>
<div id="ar">
<div class="images">

<img src="https://i5.walmartimages.ca/images/Enlarge/094/514/6000200094514.jpg" alt="Apple" 	width="150px" height="150px">
<p name=fruits[] class="title">Apple</p>
<p class="amt"> ₹100/kg</p> 
<input type="text" id="quan" placeholder="Quantity" name="quantity[]">
<a class="inc" onclick="inc(0)">+</a>
<a class="dec" onclick="dec(0)">-</a>
<input type="button" class="add" onclick="add(0)" value="Add to Cart">
</div>
<div class="images">
<img src="https://www.stickpng.com/assets/images/580b57fcd9996e24bc43c15d.png" alt="Mangoes" 	width="150px" height="150px">
<p name=fruits[] class="title">Alphonso Mangoes</p>
<p class="amt"> ₹50/kg</p> 
<input type="text" id="quan" placeholder="Quantity" name="quantity[]">
<a class="inc" onclick="inc(1)">+</a>
<a class="dec" onclick="dec(1)">-</a>
<input type="button" class="add" onclick="add(1)" value="Add to Cart">
</div>
</div>
<div id="ar1">
<div class="images">
<img src="https://purepng.com/public/uploads/large/purepng.com-cabbagecabbageplantvegetablesgreen-1701527241947ai5qo.png" alt="Cabbage" width="150px" height="150px">
<p name=fruits[] class="title">Cabbages</p>
<p class="amt"> ₹23/kg</p>
<input type="text" id="quan" placeholder="Quantity" name="quantity[]">
<a class="inc" onclick="inc(2)">+</a>
<a class="dec" onclick="dec(2)">-</a>
<input type="button" class="add" onclick="add(2)" value="Add to Cart">
</div>
<div class="images">
<img src="http://pngimg.com/uploads/tomato/tomato_PNG12567.png" alt="Tomato" width="150px" height="150px">
<p name=fruits[] class="title">Tomatoes</p>
<p class="amt"> ₹15/kg</p>
<input type="text" id="quan" placeholder="Quantity" name="quantity[]">
<a class="inc" onclick="inc(3)">+</a>
<a class="dec" onclick="dec(3)">-</a>
<input type="submit" class="add" onclick="add(3)" value="Add to Cart">
</div>
</div>
</body>

</html>

