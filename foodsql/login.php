<?php
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="food";
			$conn=mysqli_connect($servername, $username, $password, $dbname) or die("failed");
			if(isset($_POST['submit']))
		{
			$a1=$_POST['name'];
			$b1=$_POST['password'];
			$sql = mysqli_query($conn, "SELECT count(*) as total from users where name = '".$a1."' and password = '".$b1."'") or die(mysqli_error($conn));
			$ans = mysqli_query($conn, "SELECT id from users where name = '".$a1."' and password = '".$b1."'");
			if (mysqli_num_rows($ans) > 0) {
				while($rowData = mysqli_fetch_array($ans)){
				$data =$rowData["id"]."";
				}
			}
			$rw = mysqli_fetch_array($sql);
			if($rw['total'] > 0)
			{
			if($a1=="admin" && $b1=="123")
				{
					echo "<script type='text/javascript'>alert('welcome you log as administrator');window.location.href='http://localhost/foodsql/index.html?id=$data'</script>";
				}
			else
			{
			$c1=strtoupper("$a1");
			 echo "<script type='text/javascript'>alert('welcome $c1');window.location.href='http://127.0.0.1:8002/homepage?id=$data'</script>";
			}
			}
        else
		{
         echo "<script type='text/javascript'>alert('Invalid Password or Username');window.location.href='http://127.0.0.1:8002/'</script>";
		}
		}
?>