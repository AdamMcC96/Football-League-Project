<?php
session_start();  // needed in every page
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body>
<ul>
    <li><a href="index.php">Home</a></li>
</ul>
<div class="container">
    <img src="img/user.png"/>
    <table>
        <?php if(isset($_SESSION['p_id'])){
            echo '<p><b>Player ID: </b> ';
            echo $_SESSION['p_id'];
            echo '</p>';
            echo '<br>';
            echo '<p><b>First name: </b> ';
            echo $_SESSION['p_firstName'];
            echo '</p>';
            echo '<p><b>Last name: </b>';
            echo $_SESSION['p_lastName'];
            echo '</p>';
            echo '<p><b>Date of Birth: </b>';
            echo $_SESSION['p_dob'];
            echo '</p>';
            echo '<p><b>E-Mail: </b>';
            echo $_SESSION['p_email'];
            echo '</p>';


        }elseif(isset($_SESSION['a_id'])){
            echo '<tr><td>Admin ID:</td><td>';
            echo $_SESSION['a_id'];
            echo '</tr></td>';
        }else{
            exit();
        }?>
    </table>
</div>
</body>
</html>