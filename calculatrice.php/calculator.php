
<!DOCTYPE html>
<html>
<head>
	<title>calculator-php</title>
</head>
<body>
	
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

		<div>
			<label for="num1">Number 1</label>
			<input type="number" name="num1" id="num1" value="<?= $x ?>">
		</div>

		<div>
			<label for="num2">Number 2</label>
			<input type="number" name="num2" id="num2" value="<?= $y ?>">
		</div>

       <div>
			<label for="result">Result</label>
			<input type="number" id="result" value="<?= $result ?>" disabled>
		</div>
		<div> 
			<input type="submit" value="add" name="operation">
			<input type="submit" value="sub" name="operation">
			<input type="submit" value="pro" name="operation">
			<input type="submit" value="div" name="operation">
		</div>
	</form>
	<!-- ......code php...... -->
<?php 
  $error = "";
  $x = "";
  $y = "";
  $result = "";
     if (isset($_GET['operation'])){
     	$x = $_GET['num1'];
    	$y = $_GET['num2'];
    	$op = $_GET['operation'];

    	if(is_numeric($x) && is_numeric($y)){

	   switch ($op) {
	    	case 'add': $result = $x + $y;
			    break;
			case 'sub': $result = $x - $y;
			    break;
			case 'pro': $result = $x * $y;
			  break;
			case 'div': $result = $x / $y;
			  break;
			}
		
	}else{
		$error = "Enter Number first";
	}
    		
    	


}

?>

</body>
</html>