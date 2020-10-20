<?php
	define('DB_SERVER', 'localhost:80');
   	define('DB_USERNAME', 'root');
   	define('DB_PASSWORD', '');
   	define('DB_DATABASE', 'gasStation');
   	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>



<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<div style="border:solid red 2px">
		<form action="" method="post">
			<h2>Book a Cylinder:</h2>
			<input type="submit" name="bookcylinder">
		</form>
	</div>
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
		<?php
session_start();
$_SESSION["userId"] = "9";
$conn = mysqli_connect("localhost", "root", "", "gasStation") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from users WHERE userId='" . $_SESSION["userId"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($conn, "UPDATE users set password='" . $_POST["newPassword"] . "' WHERE userId='" . $_SESSION["userId"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>
	</div>
</body>
</html>