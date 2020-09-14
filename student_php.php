<!DOCTYPE html>
<html>
<head>
	<title>Student Info</title>
	<style type="text/css">
		body{
			font-family: Helvetica;
		}
		#form{
			border: solid 2px #000;
			padding: 20px;
		}
		table{
			border-spacing: 15px 15px;
		}
		#form input{
			width: 80px;
		}
		#submit{
			width: 300px !important;
		}
	</style>
</head>
<body bgcolor="#D8321A">

<form method="post" id="form" align=center>
	<table>
		<tr>
			<th>Subjects</th>
			<th>Student 1</th>
			<th>Student 2</th>
			<th>Student 3</th>
			<th>Student 4</th>
			<th>Student 5</th>
			<th>Student 6</th>
			<th>Student 7</th>
			<th>Student 8</th>
			<th>Student 9</th>
			<th>Student 10</th>

		</tr>
		<tr>
			<th>English</th>
			<th>
				<input type="text" name="eng-st-1" value="<?php echo isset($_POST)?$_POST['eng-st-1']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="eng-st-2" value="<?php echo isset($_POST)?$_POST['eng-st-2']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="eng-st-3" value="<?php echo isset($_POST)?$_POST['eng-st-3']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="eng-st-4" value="<?php echo isset($_POST)?$_POST['eng-st-4']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="eng-st-5" value="<?php echo isset($_POST)?$_POST['eng-st-5']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="eng-st-6" value="<?php echo isset($_POST)?$_POST['eng-st-6']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="eng-st-7" value="<?php echo isset($_POST)?$_POST['eng-st-7']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="eng-st-8" value="<?php echo isset($_POST)?$_POST['eng-st-8']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="eng-st-9" value="<?php echo isset($_POST)?$_POST['eng-st-9']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="eng-st-10" value="<?php echo isset($_POST)?$_POST['eng-st-10']:''; ?>"> 
			</th>
		</tr>
		<tr>
			<th>Maths</th>
			<th>
				<input type="text" name="maths-st-1" value="<?php echo isset($_POST)?$_POST['maths-st-1']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="maths-st-2" value="<?php echo isset($_POST)?$_POST['maths-st-2']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="maths-st-3" value="<?php echo isset($_POST)?$_POST['maths-st-3']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="maths-st-4" value="<?php echo isset($_POST)?$_POST['maths-st-4']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="maths-st-5" value="<?php echo isset($_POST)?$_POST['maths-st-5']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="maths-st-6" value="<?php echo isset($_POST)?$_POST['maths-st-6']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="maths-st-7" value="<?php echo isset($_POST)?$_POST['maths-st-7']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="maths-st-8" value="<?php echo isset($_POST)?$_POST['maths-st-8']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="maths-st-9" value="<?php echo isset($_POST)?$_POST['maths-st-9']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="maths-st-10" value="<?php echo isset($_POST)?$_POST['maths-st-10']:''; ?>"> 
			</th>
		</tr>
		<tr>
			<th>Pyhsics</th>
			<th>
				<input type="text" name="phy-st-1" value="<?php echo isset($_POST)?$_POST['phy-st-1']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="phy-st-2" value="<?php echo isset($_POST)?$_POST['phy-st-2']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="phy-st-3" value="<?php echo isset($_POST)?$_POST['phy-st-3']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="phy-st-4" value="<?php echo isset($_POST)?$_POST['phy-st-4']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="phy-st-5" value="<?php echo isset($_POST)?$_POST['phy-st-5']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="phy-st-6" value="<?php echo isset($_POST)?$_POST['phy-st-6']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="phy-st-7" value="<?php echo isset($_POST)?$_POST['phy-st-7']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="phy-st-8" value="<?php echo isset($_POST)?$_POST['phy-st-8']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="phy-st-9" value="<?php echo isset($_POST)?$_POST['phy-st-9']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="phy-st-10" value="<?php echo isset($_POST)?$_POST['phy-st-10']:''; ?>"> 
			</th>
		</tr>
		<tr>
			<th>Computer Science</th>
			<th>
				<input type="text" name="comp-st-1" value="<?php echo isset($_POST)?$_POST['comp-st-1']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="comp-st-2" value="<?php echo isset($_POST)?$_POST['comp-st-2']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="comp-st-3" value="<?php echo isset($_POST)?$_POST['comp-st-3']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="comp-st-4" value="<?php echo isset($_POST)?$_POST['comp-st-4']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="comp-st-5" value="<?php echo isset($_POST)?$_POST['comp-st-5']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="comp-st-6" value="<?php echo isset($_POST)?$_POST['comp-st-6']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="comp-st-7" value="<?php echo isset($_POST)?$_POST['comp-st-7']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="comp-st-8" value="<?php echo isset($_POST)?$_POST['comp-st-8']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="comp-st-9" value="<?php echo isset($_POST)?$_POST['comp-st-9']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="comp-st-10" value="<?php echo isset($_POST)?$_POST['comp-st-10']:''; ?>"> 
			</th>
		</tr>
		<tr>
			<th>Chemistry</th>
			<th>
				<input type="text" name="chy-st-1" value="<?php echo isset($_POST)?$_POST['chy-st-1']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="chy-st-2" value="<?php echo isset($_POST)?$_POST['chy-st-2']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="chy-st-3" value="<?php echo isset($_POST)?$_POST['chy-st-3']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="chy-st-4" value="<?php echo isset($_POST)?$_POST['chy-st-4']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="chy-st-5" value="<?php echo isset($_POST)?$_POST['chy-st-5']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="chy-st-6" value="<?php echo isset($_POST)?$_POST['chy-st-6']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="chy-st-7" value="<?php echo isset($_POST)?$_POST['chy-st-7']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="chy-st-8" value="<?php echo isset($_POST)?$_POST['chy-st-8']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="chy-st-9" value="<?php echo isset($_POST)?$_POST['chy-st-9']:''; ?>"> 
			</th>
			<th>
				<input type="text" name="chy-st-10" value="<?php echo isset($_POST)?$_POST['chy-st-10']:''; ?>"> 
			</th>
		</tr>		
	
		

<?php

if(!is_null($_POST['submit'])){
	unset($_POST['submit']);
	$students=array();
	$subjects=array("Maths"=>0, "Physics"=>0,"Chemistry"=>0, "English"=>0,"Computer"=>0);
	foreach($_POST as $sub=>$val){
		$info=explode('-',$sub);
		if(is_null($students[$info[1].'-'.$info[2]])){
			$students[$info[1].'-'.$info[2]]['subjects']=$subjects;
		}
		switch($info[0]){

		case "eng":
			$students[$info[1].'-'.$info[2]]['subjects']['English']=$val;
			break;
		case "maths":
			$students[$info[1].'-'.$info[2]]['subjects']['Maths']=$val;
			break;
		case "phy":
			$students[$info[1].'-'.$info[2]]['subjects']['Physics']=$val;
			break;
		case "comp":
			$students[$info[1].'-'.$info[2]]['subjects']['Computer']=$val;
			break;
		case "chy":
			$students[$info[1].'-'.$info[2]]['subjects']['Chemistry']=$val;
			break;
	}
	}    
	foreach($students as $st=>$fields){
		$total=0;
		foreach($fields["subjects"] as $sub=>$mark){
			if($mark===""){
				$total=null;
				break;
			}
			$total=$total+$mark;
		}
		if(is_null($total)){
			$students[$st]["Total"]="Not Available";
			$students[$st]["Average"]="Not Available";
			$students[$st]["Percent"]="Not Available";
		}
		else{
			$students[$st]["Total"]=$total;
			$students[$st]["Average"]=$total/count($students[$st]["subjects"]);
			$students[$st]["Percent"]=($total/(count($students[$st]["subjects"])*80))*100;
		}
	}
	$fields = array("Total","Average","Percent");
	$len=count($fields);
	for($i=0;$i<$len;$i++){
		echo "<tr>";
		echo "<th>".$fields[$i]."</th>";
		foreach($students as $st){
				echo "<th>".$st[$fields[$i]]."</th>";
		}
		echo "</tr>";

	}
	
	}

?>
	</table><br><br>
	<input type="submit" name="submit" id="submit"/>
</form>

</body>
</html>