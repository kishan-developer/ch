<?php 
$conn = mysqli_connect("localhost","root","","ecom_store");
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['subject'];
$d=$_POST['message'];
$ins = "insert into contact(name,email,subject,message)values('$a','$b','$c','$d')";
if(mysqli_query($conn,$ins)){ 

}

?>