<?php
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	
$_SESSION["name"] = $_POST["name"];
echo "<br>";
echo $_SESSION["name"];
echo "<br>";

$_SESSION["email"] = $_POST["email"];
echo "<br>";
echo $_SESSION["email"];
echo "<br>";

$_SESSION["password"] = $_POST["password"];
echo "<br>";
echo $_SESSION["password"];
echo "<br>";

$_SESSION["gender"] = $_POST["gender"];
echo "<br>";
echo $_SESSION["gender"];
echo "<br>";



?>

<?php
$fileErr="";
$file="";

if($_SERVER["REQUEST_METHOD"]=="POST")

{
	if(empty($_POST["fileToUpload"]))
	{
		$fileErr ="File is required";
	}
	else
	{
		$file=$_POST["fileToUpload"];
	}
}

?>

<form action="regform.php" method="post"entype="">

	
<br>
<input type="submit" name="submit">
</form>

</body>
</html>