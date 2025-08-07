<?php 
$servername = 'localhost'; 
$username = 'root'; 
$password = ''; 
$dbname = 'plant selling';
$conn=new mysqli($servername,$username,$password,$dbname); 
 if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
if(isset($_SERVER["REQUEST_METHOD"] == "POST") 
{ 
$order = $_POST["order"];
 $quantity = $_POST["quantity"];
 $price = $_POST["price"];
 $total = $quantity * $price;
 
 $sqli = "INSERT INTO your_table_name(order_coloumn,quantity_coloumn,price_coloumn,total_coloumn)
 VALUES('$order,$quantity,$price,$total)";
 
 if ($conn->query($sql) === TRUE) { 
 echo "Record added successfully"; 
 } else {
	 echo "Error: " . $sql . "<br>" . $conn->error; 
	 } 
 $conn->close();
} ?>