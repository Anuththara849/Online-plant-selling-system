<?php
if(isset($_POST['register']))
{
  $conn = new mysqli('localhost','root','','plant selling');
  if ($conn) {
    echo "registation succesfully...";
  }
  else {
    echo "connection fail";
  }

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql="INSERT INTO customer(firstname,lastname,username,phonenumber,email,password)
VALUES('$firstname','$lastname','$username','$phonenumber','$email','$password')";
  if (mysqli_query($conn,$sql))
  {
   echo "succesfully saved";
 } else {
   echo "save failed";
}
mysqli_close($conn);
}
?>