<?php
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="it";
			$conn=mysqli_connect($servername, $username, $password, $dbname) or die("failed");
			if(isset($_POST['submit1']))
		{
			$a1=$_POST['username1'];
			$b1=$_POST['password1'];
			$sql = mysqli_query($conn, "SELECT count(*) as total from project1 where username = '".$a1."' and password = '".$b1."'") or die(mysqli_error($conn));
			$rw = mysqli_fetch_array($sql);
			if($rw['total'] > 0)
			{
			$c1=strtoupper("$a1");
			echo "<h1><center>HELLO $c1 WELCOME TO OUR WEBSITE</h1></center><br>";
			}
        else
		{
         echo "<script type='text/javascript'>alert('Invalid Password or Username');window.location.href='/signup'</script>";
		}
		}
?>
<html>
<style>
  #main
        {
        background-color: #333;
        border-radius: 40px;
        }
        h1
        {
        colour: white;
        background-color: blue;
        border-top-right-radius: 30px;
        border-top-left-radius: 30px;
        }
        h2
        {
        colour: blue;
		background-color: blue;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
        }
		h3
        {
        colour: white;
		background-color: white;
        align: center;
        }
        .text
        {
        background-color:#333;
        color: white;
        width: 250px;
        font-weidth:bold;
        font-size:20px;
        border:none;
        }
        hr
        {
        width:250px;
        margin-left:0px !important;
        }
        #sub
        {
        width:250px;
        height:30px;
        background-color:blue;
        border:none;
        }
body {background: url(https://wallpapercave.com/wp/wp2055835.jpg); background-size: 100% 100%;}
</style>
<body bgcolor="yellow">

						<h3><text><marquee>GET FREE COUPONS AND DISCOUNTS ON TOP BRANDS WITH EVERY RECHARGE</marquee></text></h3><br><br>
						<center>
						
						<button type="button" onclick="window.location.href = 'recharge.php';"  class="text" id="sub" align="left">Recharge</button>
						
						
						<button type="button" onclick="window.location.href = 'modifypack.php';"  class="text" id="sub" align="right">Manage Packs</button>
											
		
						<button type="button" onclick="window.location.href = 'contact.php';"  class="text" id="sub" align="left">Helpline Number</button>
						</center>
						
</body>
</html>
