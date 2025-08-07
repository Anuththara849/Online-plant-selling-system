<?php


  $conn = new mysqli('localhost','root','','plant selling');
  if ($conn) {
    echo "connection succesfully...";
  }
  else {
    echo "connection fail";
  }
if(isset($_POST['login'])){
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);


$sql=mysqli_query($conn,"SELECT * FROM customer WHERE username='$username' AND password ='$password'");
$row=mysqli_fetch_assoc($sql);

  if (mysqli_num_rows($sql)==1){
  header ("location:new1.html");
   //echo "succesfully saved";
  }else {
   echo "Invalid username or password";
}
mysqli_close($conn);

}
?>
