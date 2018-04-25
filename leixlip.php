<?php
/**
 * Created by PhpStorm.
 * User: Adam
 */
if($_POST){
    $name = $_POST['name'];
    $comment = $_POST['commentContent'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $handle = fopen("leixlipComments.html","a");
    fwrite($handle, "<b>" . $name . ' (' . $phoneno . ')' . ' (' . $email . ')' . "</b>:<br/>" . $comment . "<br/>");
    fclose($handle);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Find fixtures of Matches">
    <meta name="keywords" content="Matches, Locations">
    <meta name="author" content="Adam McCarthy">
    <title>Football League | Leixlip United FC</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="container">
        <div id="branding">
            <h1><span class="highlight">Football</span> League</h1>
        </div>
        <nav>
            <ul>
                <li ><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="clubs.php">Clubs</a></li>
                <?php
                if(isset($_SESSION['p_id']) || isset($_SESSION['a_id'])){
                    echo '<li><a href="logout.html">Logout</a></li>
                          <li><a href="profile.php"><img src="img/user.png"/></a></li>';
                }else {
                    echo '<li><a href="signup.html">Sign Up</a></li>
						    <li><a href="login.html">Login</a></li>';
                }?>
            </ul>
        </nav>
    </div>
</header>


<section id="search">
    <div class="container">
        <h1>Football League | Leixlip United FC</h1>
        <form>
            <input type="word" placeholder="Search Fixtures...">
            <button type="search" class="button_1">Search </button>
        </form>
    </div>
</section>
<section id="main">

    <aside id="sidebar">
        <div class="dark">
            <h4>Contact Info</h4>
            <p><h4>Chairperson:</h4> Gerard Duke</p>
            <p><h4>Mobile:</h4> 086-8294399</p>
            <p> </p>
            <p><h4>Hon. Secretary:</h4> Anthony Moore</p>
            <p><h4>E-mail:</h4> info@leixlipafc.com</p>
            <p><h4>Mobile:</h4> 087-1782838</p>
        </div>
    </aside>
    </div>

    <form action="" method="POST">
        Comment: <textarea rows="10" cols="30" name="commentContent"></textarea><br/>
        Name: <input type="text" name="name" placeholder="Name"><br/>
        Phone no: <input type="text" name="phoneno" placeholder="+353861234567"><br/>
        E-mail: <input type="text" name="email" placeholder="example@example.com"><br/>
        <input type = "submit" value="Post!"><br/>
    </form>
    <?php include "leixlipComments.html"; ?>
</section>
<footer>
    <p>Football League, Copyright &copy; 2017</p>
</footer>
</body>
</html>
