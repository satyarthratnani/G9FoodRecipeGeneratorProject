<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$url = $_SERVER['REQUEST_URI']; 
    $url_components = parse_url($url); 
    parse_str($url_components['query'], $params); 
    $key = $params['id'];
$link = mysqli_connect("localhost", "root", "", "food");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$comment = mysqli_real_escape_string($link, $_REQUEST['comment']);
$name = mysqli_query($link, "SELECT name from users where id = '$key'") or die(mysqli_error($link));
if (mysqli_num_rows($name) > 0) {
				while($rowData = mysqli_fetch_array($name)){
				$data =$rowData["name"]."";
				}
			}
$email = mysqli_query($link, "SELECT email from users where id = '$key'") or die(mysqli_error($link));
if (mysqli_num_rows($email) > 0) {
				while($rowData2 = mysqli_fetch_array($email)){
				$data2 =$rowData2["email"]."";
				}
			}
// Attempt insert query execution
$sql = "INSERT INTO comment (name, email, comment) VALUES ('$data','$data2','$comment')";
if(mysqli_query($link, $sql)){
	echo "<script type='text/javascript'>alert('Comment upload successfully');window.location.href='http://127.0.0.1:8002/homepage?id=$key'</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
