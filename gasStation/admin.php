<?php
   <?php
	define('DB_SERVER', 'localhost:80');
   	define('DB_USERNAME', 'root');
   	define('DB_PASSWORD', '');
   	define('DB_DATABASE', 'gasStation');
   	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>

      <div>
		<table>
			<tr>
			<th>Cylinder</th>
			<th>Date</th>
			</tr>

			<?php
				$sql = "SELECT date,cylinder FROM booking WHERE username = '$myusername'";
      			$result = mysqli_query($db,$sql);
      			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      			foreach($row as $a){
      				echo "<tr>"."<td>".$a[0]."</td>"."<td>".$a[1]."</td>"."</tr>";
      			}
			?>
		</table>
	</div>

	<div>
		<table>
			<tr>
			<th>username</th>
			<th>date</th>
			</tr>

			<?php
				$sql = "SELECT date,username FROM customer WHERE username = '$myusername'";
      			$result = mysqli_query($db,$sql);
      			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      			foreach($row as $a){
      				echo "<tr>"."<td>".$a[0]."</td>"."<td>".$a[1]."</td>"."</tr>";
      			}
			?>
		</table>
	</div>	
   </body>
   
</html>
