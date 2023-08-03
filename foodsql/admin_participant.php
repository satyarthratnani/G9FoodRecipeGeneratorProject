<html>
<head>
    <style>
body { 
  background: url('http://localhost/Project_ui/face-mask-website/images/bg7.jpg') no-repeat center center fixed;
  background-size: cover;
}
</style>
   
</head>
</body>
</html>
<?php
require_once 'C:\wampIT\www\exp2\admin\utils\functions.php';
require_once 'C:\wampIT\www\exp2\admin\classes\User.php';
require_once 'C:\wampIT\www\exp2\admin\classes\Event.php';
//require_once 'classes/EventTableGateway.php';
//require_once 'classes/Location.php';
//require_once 'classes/LocationTableGateway.php';
require_once 'C:\wampIT\www\exp2\admin\classes\Connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php require 'C:\wampIT\www\exp2\admin\utils\styles.php'; ?>
        <?php require 'C:\wampIT\www\exp2\admin\utils\scripts.php'; ?>
    </head>
    <body>

        <div class = "content">
            <div class = "container">
                <?php 
                if (isset($message)) {
                    echo '<p>'.$message.'</p>';
                }
                ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="color:white">id</th>
                            <th style="color:white">name</th>                    
                            <th style="color:white">email</th>
                            <th style="color:white">password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$conn=mysqli_connect("localhost","root","","food");
						$sql="SELECT * FROM users";
						$result=$conn->query($sql);
						if($result->num_rows > 0){
						$row = $result->fetch_assoc();
                        while ($row) {
                            echo '<tr>';
                            echo '<td style="color:white">' . $row['id'] . '</td>';          
							echo '<td style="color:white">' . $row['name'] . '</td>';
                            echo '<td style="color:white">' . $row['email'] . '</td>';
                            echo '<td style="color:white">' . $row['password'] . '</td>';
              
                            echo '<td>'
                            . '<a class="delete" href="http://localhost/foodsql/deleteparticipate.php?id='.$row['id'].'">Delete</a> '
                            . '</td>';
                            echo '</tr>';  

                            $row = $result->fetch_assoc();
                        }
						}
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>
        

    </body>
</html>
