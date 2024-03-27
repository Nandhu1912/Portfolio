<?php
$name = $_POST['name'];
$email  = $_POST['email'];
$password = $_POST['password'];
$message = $_POST['message'];

$con= mysqli_connect("localhost","root","","portfolio");
$sql="INSERT INTO contact info(name,email,password,message) values ('$name','$email','$password','$message')";
$r=mysqli_query($con,$sql);

if($r){
    echo 'successfully submit';
}
else{
    echo 'Not sucessfully submit';
}
?>