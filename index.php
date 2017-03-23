<!DOCTYPE html>
<html>
<body>
<h1>My first PHP page</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <br>
  Password: <input type="password" name="fpassword">
  <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
	$password = $_REQUEST['fpassword'];
    if (empty($name)) {
        echo "Name is empty!";
    } else {
		if($name=="nikos"&&$password=="123"){
			echo "Welcome".$name;
		}
        
    }
}
?>

</body>
</html>