<?php
$con=mysqli_connect('localhost:3308','root','','product');
// create a variable
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$method=$_POST['metod'];

//Execute the query
mysqli_query($con,"INSERT INTO ai (name,email,phone,address,method) VALUES ('$name','$email','$phone','$address','$method')");				
if(mysqli_affected_rows($con) > 0)
{
    header("Location: http://localhost/Product/index.html");
    die();
} 
else 
{
	echo "Employee NOT Added<br />";
	echo mysqli_error ($con);
}
?>