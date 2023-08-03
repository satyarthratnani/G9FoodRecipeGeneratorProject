<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "food");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$confpassword = mysqli_real_escape_string($link, $_REQUEST['confpassword']);
$sql1 = mysqli_query($link, "SELECT count(*) as total from users where email = '$email'") or die(mysqli_error($link));
$rw = mysqli_fetch_array($sql1);
if($rw['total'] > 0)
	{
			 echo "<script type='text/javascript'>alert('$email was already taken');window.location.href='http://127.0.0.1:8002/signup'</script>";
	}
else
	{
// Attempt insert query execution
$sql = "INSERT INTO users (name, email, password,confpassword) VALUES ('$name','$email','$password','$confpassword')";
if(mysqli_query($link, $sql)){
	echo "<script type='text/javascript'>alert('$email Succussfully Register');window.location.href='http://127.0.0.1:8002/'</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
	}
 
// Close connection
mysqli_close($link);
?>
