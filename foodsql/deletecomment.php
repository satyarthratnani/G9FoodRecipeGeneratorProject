<?php
	$url = $_SERVER['REQUEST_URI']; 
    $url_components = parse_url($url); 
    parse_str($url_components['query'], $params); 
	$key = $params['id'];
	//$key1 = $params['email'];
	//echo "$key <br>";
	//echo "$key1"; 
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "food");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$sql = "DELETE FROM comment WHERE id='$key'";
if(mysqli_query($link, $sql)){
	header("location:http://localhost/foodsql/admin_comment.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>


