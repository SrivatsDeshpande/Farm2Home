<?php
session_start();

$name=$_POST['name'];

$phone=$_POST['phone'];


$source=$_POST['home'];


$_SESSION['username']=$_POST['new_uname'];
$new_uname=$_SESSION['username'];
$new_pw=$_POST['new_pw'];
$servername="localhost";
$username="root";
$password="root";
$_SESSION['name']=$name;
$conn=new mysqli($servername,$username,$password);
$sql="use hack";
mysqli_query($conn,$sql);

$sql="select * from users where username='$new_uname'  ";
$res=mysqli_query($conn,$sql);
while(true){
if(mysqli_num_rows($res)!=0)
{
	echo "<script> window.alert('Record already exists! Try logging in. '); </script>";
	echo "<script> location.href='login1.html' </script> ";
        exit; 
        break;
}
else{
$sql="insert into users(name,username,password,phone,address) values('$name','$new_uname','$new_pw',$phone,'$source')";

mysqli_query($conn,$sql);

echo "<script> window.alert('Row added succesfully! Login to visit the website '); </script>";
echo "<script> location.href='login1.html' </script> ";

        exit;break;
}
}

mysqli_close($conn);

?>


</html>