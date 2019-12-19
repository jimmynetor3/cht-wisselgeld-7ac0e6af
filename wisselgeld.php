
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="wisselgeld.css">
</head>
<body>
	
<form action="#" method="POST" >
	<label>jouw wisselgeld</label>
	<input type="number" placeholder="1.0" step="0.01" min="0" name="inputfield">
	<input type="submit">
</form>

<h2>je krijgt terug</h2>
<?php 
if (isset($_POST["inputfield"])) {

$input = $_POST["inputfield"];
$cent;
$amountarray = array(100 ,50, 20, 10, 5, 2, 1, 0.50, 0.20, 0.10, 0.05 , 0.02 , 0.01);
for ($i=0; $i <count($amountarray) ; $i++) { 
	if ($amountarray[$i] <= $input && $input >= 1) {
		$wisselgeld =  floor($input / $amountarray[$i]);
		$input = $input - ($wisselgeld * $amountarray[$i]);
	 	$euroantwoord =  $amountarray[$i];
		echo  " <div> $wisselgeld x <h3> $euroantwoord  euro </h3> </div>" . PHP_EOL ;
		
		
	}
	elseif ($input < 1) {
		$cent = round($input,2) * 100;
		$wisselgeld = floor($cent / ($amountarray[$i]*100));
		$input = $input - ($wisselgeld * $amountarray[$i]);
		if ($wisselgeld > 0) {
		 $amountarrayx100 =	($amountarray[$i] * 100);
		 echo  "<div> $wisselgeld x <h4>$amountarrayx100 cent </h4> </div>";
		}
		
	}
}
}


 ?>
 	
 </body>
</html>