<?php
$servername="localhost";
$username="root";
$password="";
$dbname="it";
$conn=mysqli_connect($servername, $username, $password, $dbname) or die("failed");
echo "connection successfully";
$sql = "create table project1(id int(6) unsigned auto_increment primary key,username varchar(30) not null,password varchar(30) not null)";
if($conn->query($sql) === true)
{
	echo "success";
}
else
{
	echo "error";
}
$a=$_POST['username'];
$b=$_POST['password'];
$sql = "insert into project1(username, password) values('$a','$b')";
if(mysqli_query($conn, $sql))
{
	echo "recordsuccess";
}
else
{
	echo "error";
}
$conn->close();
    if(isset($_POST['submit']))
    {
            header("location:login1.php");
            exit();
    }

 ?>
 
