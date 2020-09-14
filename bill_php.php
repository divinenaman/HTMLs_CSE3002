<!DOCTYPE html>
<html>
<body align=center bgcolor="#D8321A">

<form method="post">
 
	<label for="num">Number Of Units:</label><br>
	<input type="text" name="units" id="units" value="<?php echo isset($_POST)?$_POST['units']:''; ?>"/>
	
	<input type="submit" name="submit"/>

</form>

<?php

if(isset($_POST['submit'])){

	$units=$_POST["units"];
	$ans=0;
	if($units<51){
		$ans=3.5*$units;
	}
	else if($units<151){
		$ans=50*3.5+4*($units-50);	
	}
	else if($units<251){
		$ans=50*3.5+4*100+5.2*($units-150);
	}
	else{
		$ans=50*3.5+4*100+5.2*100+($units-250)*6.2;	
	}    
	echo "<h2>"."Total Cost of $units units: ".$ans."</h2>";
	}
?>

</body>
</html>