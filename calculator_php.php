<!DOCTYPE html>
<html>
<body align=center bgcolor="#D8321A">

<form method="post" bgcolor="red"> 

	<label for="num">Number 1:</label><br>
	<input type="text" name="num1" id="num" value="<?php echo isset($_POST)?$_POST['num1']:''; ?>"/>
	<br><br>
	<label for="num">Number 2:</label><br>
	<input type="text" name="num2" id="num" value="<?php echo isset($_POST)?$_POST['num2']:''; ?>"/>
	<br><br>
	<label for="op">Operation :</label>
    <select name="op" id="op" value="<?php echo isset($_POST)?$_POST['op']:''; ?>">
               <option>None</option>
               <option>Add</option>
               <option>Subtract</option>
               <option>Multiply</option>
               <option>Divide</option>
               <option>Power</option>
    </select><br><br>
	<input type="submit" name="submit"/>

</form>

<?php

if(isset($_POST['submit'])){

	$result1=$_POST["num1"];
	$result2=$_POST["num2"];
	$operator=$_POST["op"];
	$ans=0;
	switch ($operator) {
	        case 'None':
	            echo "You need to select any operator";
	            break;
	        case 'Add':
	            $ans= $result1 + $result2;
	            break;
	        case 'Subtract':
	            $ans= $result1 - $result2;
	            break;
	        case 'Multiply':
	            $ans= $result1 * $result2;
	            break;
	        case 'Divide':
	            $ans= $result1 / $result2;
	            break;
	        case 'Power':
	            $ans= $result1 ** $result2;
	            break;
	    }
	    echo "<h2>Answer: $ans</h2>";
    }
?>

</body>
</html>