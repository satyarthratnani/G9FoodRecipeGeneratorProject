
<html>
<head>
    <title>login</title>
    <style type="text/css">
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
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
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
    </style>
</head>
<body>
    <div id="main">
     <center><h1>LOGIN</h1></center>
        <form method="post" action="http://localhost/18IT444/home.php">
            <table align="center" height="600" width="600" border="0">
                <tr>

                  <td><h2>USERNAME :</h2></td>
                    <td><input type="text" name="username1" class="text" autocomlete="off" required><br><hr></br></td>
                </tr>
                <tr>
                <td><h2>PASSWORD :</h2></td>
                <td><input type="password" name="password1" class="text" required><br><hr></br>
                </tr>
                <tr>
                    <td><input type="submit" name="submit1" value="SUBMIT" class="text" id="sub"></td>
					<td><button type="button" id="sub" class="text" onclick="window.location.href = '/signup';">NEW REGISTRATION</button></td>
                </tr>
                </table>
        </form>
    </div>
</body>
</html>