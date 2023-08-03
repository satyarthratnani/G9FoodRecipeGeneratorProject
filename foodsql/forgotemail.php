<?php
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="food";
			$conn=mysqli_connect($servername, $username, $password, $dbname) or die("failed");
			if(isset($_POST['submit']))
		{
			$a1=$_POST['email'];
			$sql = mysqli_query($conn, "SELECT count(*) as total from users where email = '".$a1."'") or die(mysqli_error($conn));
			$ans = mysqli_query($conn, "SELECT id from users where email = '".$a1."'");
			if (mysqli_num_rows($ans) > 0) {
				while($rowData = mysqli_fetch_array($ans)){
				$data =$rowData["id"]."";
				}
			}
			$rw = mysqli_fetch_array($sql);
			if($rw['total'] > 0)
			{			
			echo "<script type='text/javascript'>alert('$a1 have account in our server and your account credentials will be send to your email');window.location.href='http://127.0.0.1:8002/check?id=$data'</script>";
			}
        else
		{
         echo "<script type='text/javascript'>alert('$a1 has not created an account in our server you can sign up for new account');window.location.href='http://127.0.0.1:8002/signup'</script>";
		}
		}
?>