<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form action="/check" method="post">
{% csrf_token %}
</form>	
</body>
</html>
<?php
$link = mysqli_connect("localhost", "root", "", "food");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$email = mysqli_real_escape_string($link, $_REQUEST['{{data_check}}{{data1}}']);
$sql1 = mysqli_query($link, "SELECT count(*) as total from users where email = '{{data_check}}{{data1}}'") or die(mysqli_error($link));
$rw = mysqli_fetch_array($sql1);
if($rw['total'] > 0)
	{		 
			
			echo "<script type='text/javascript'>alert('{{data_check}}{{data1}} have account in our server');window.location.href='http://localhost/foodsql/forgotemail2.php?email={{data_check}}{{data1}}'</script>";
	}
else
	{
	echo "<script type='text/javascript'>alert('{{data_check}}{{data1}} has not created an account in our server you can sign up for new account');window.location.href='http://127.0.0.1:8002/'</script>";
	}
 
// Close connection
mysqli_close($link);
?>