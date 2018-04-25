<?php
session_start();  // needed in every page
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<ul>
    <li><a href="index.php">Home</a></li>
</ul>
<div class="container">
    <img src="img/user.png"/>
    <table>
        <?php if(isset($_SESSION['p_id'])){
            echo '<tr><td>Player ID:</td><td>';
            echo $_SESSION['p_id'];
            echo '</tr></td>';
            echo '<tr><td>First name:</td><td>';
            echo $_SESSION['p_firstName'];
            echo '</tr></td>';
            echo '<tr><td>Last name:</td><td>';
            echo $_SESSION['p_lastName'];
            echo '</tr></td>';
            echo '<tr><td>Date of Birth:</td><td>';
            echo $_SESSION['p_dob'];
            echo '</tr></td>';
            echo '<tr><td>E-Mail:</td><td>';
            echo $_SESSION['p_email'];
            echo '</tr></td>';


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