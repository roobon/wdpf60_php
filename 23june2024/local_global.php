<?php 
	$price = 10; 
	$tax = 5; 
	$total =50;

	function calcSalesTax($price, $tax){
		return $total = $price + ($price * $tax);
	}
calcSalesTax($price, $tax);
echo "Total cost: $total";

 ?>