<?php
session_start();
if(!isset($_SESSION['login']))
{
	$_SESSION['failure1']="login here";
	die(header('Location:index.php'));
}
echo ("<h1>Welcome ".htmlentities($_SESSION['name'])."</h1>");
if(isset($_POST['11'])){
	echo("1st true");
}
if(isset($_POST['row']))
{
$row=$_POST['row'];
foreach ($row as $key ) {
echo $key;
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
</head>
<body>
<form method="post">

<p>1. Are you a hafty guy</p>
<input type="checkbox"  name="row[]" value="Yes">
  <label for="Yes">Yes</label><br>
  <input type="checkbox"  name="row[]" value="No">
  <label for="No">No</label><br>

<p>2. Are you a fickle guy?</p>
<input type="checkbox"  name="row[]" value="Yes">
  <label for="Yes">Yes</label><br>
  <input type="checkbox"  name="row[]" value="No">
  <label for="No">No</label><br>

<p>3. Are you a strong in coding?</p>
<input type="checkbox"  name="row[]" value="Yes">
  <label for="Yes">Yes</label><br>
  <input type="checkbox"  name="row[]" value="No">
  <label for="No">No</label><br>
 </form>
<p>4. Are you a good in communication skills?</p>
<input type="checkbox"  name="row[]" value="Yes">
  <label for="Yes">Yes</label><br>
  <input type="checkbox"  name="row[]" value="No">
  <label for="No">No</label><br>
  <form method="post">

<p>5. Do you beleive in failures?</p>
<input type="checkbox"  name="row[]" value="Yes">
  <label for="Yes">Yes</label><br>
  <input type="checkbox"  name="row[]" value="No">
  <label for="No">No</label><br>

  <input type="submit" name="submit">
</form>
</body>
</html>
