<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body style="font-family:Helvetica" align=center bgcolor="#D8321A">

<form method="post">
	<label for="num">Number:</label><br>
	<input type="text" name="num" id="num" value="<?php echo isset($_POST)?$_POST['num']:'';?>"/>

	<input type="submit" name="submit"/>
</form>

<?php
$a=$_POST["num"];
if(!is_null($_POST['submit'])){
	$result="";
	if($a<0){
		$result="Negative";
	}
	else if($a==0){
		$result="Zero";
	}
	else{
		$result="Posiitve";
	}
	echo "<h2>$result</h2>";
}
?>

</body>
</html>