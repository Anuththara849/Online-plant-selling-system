<!DOCTYPE html>
<html>
<head>
<title>Flexbox</title>
</head>
<body>
<h1>Order plant</h1>
<button onClick="window.location.href='Buy now page.html';">Back</button>
<?php
$plants=[
"Aspidistra elatior"=>1500,
"Umbrella plant care"=>1200,
"Dumb Cane plant"=>1250,
"Money tree plant"=>600,
"Monstera deliciosa"=>800,
"pilea peperomioides"=>300,
"Snake plant in Prophetstown"=>300,
"spider plant"=>600,
"Wayfair plant"=>1500,
"ZZ plant"=>600,
"Dracaena"=>900,
"Peace Lily"=>400,
];
foreach ($plants as $plant => $price) {
	echo " 
	<section class='items'>
	<div class='item'> 
	 <img src='$plant.jpg'>
	 <h3>$plant</h3>
	 <h4>Price: Rs $price/=</h4>
	 <form action='billing.php' method='post'>
	<input type='hidden' name='plant' value='$plant'> 
	<input type='hidden' name='price'value='$price'>
	<button type ='submit'name='order'>Order'</button>
	</form>
	</div>
	</section>";
}
?>
	

	