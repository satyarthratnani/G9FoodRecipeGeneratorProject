<?php
$url = $_SERVER['REQUEST_URI']; 
    $url_components = parse_url($url); 
    parse_str($url_components['query'], $params); 
    $key = $params['email'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "food");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$sql1 = mysqli_query($link, "SELECT name FROM users where email = '$key'") or die(mysqli_error($link));
if (mysqli_num_rows($sql1) > 0) {
				while($rowData = mysqli_fetch_array($sql1)){
				$data =$rowData["name"]."";
				}
			}
$sql2 = mysqli_query($link, "SELECT password FROM users where email = '$key'") or die(mysqli_error($link));
if (mysqli_num_rows($sql2) > 0) {
				while($rowData = mysqli_fetch_array($sql2)){
				$data1 =$rowData["password"]."";
				}
			}

echo "Your Email ID is $key <br>";
echo "Your Username is $data <br>";
echo "Your Passowrd is $data1";

#echo "<script type='text/javascript'>window.location.href='http://127.0.0.1:8002/'</script>";

mysqli_close($link);
	
	?>


