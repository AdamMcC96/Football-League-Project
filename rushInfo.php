<?php
session_start();  // needed in every page
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Adam McCarthy">
    <title>Football League | Rush Athletic FC</title>
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
                <li><a href="index.php">Home</a></li>
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



<section id="main">
    <div class="container">
        <article id="main-col">
            <h1 class="page-title">About Rush Athletic FC</h1>
            <p>
                Rush Athletic FC are a soccer club based in the town of Rush in North County Dublin. We cater for soccer players aged 6 upwards and have teams at all age levels up to seniors. We currently have 17 under age teams from U8 up to U18s, plus two senior teams. We also have some very successful girls and ladies teams, now normally in summer leagues. New players welcome, bring your boots. Rush Athletic have two pitches, a floodlit training pitch and two clubhouses. One of the clubhouses contains a small training facility for the younger teams.
            </p>
        </article>

        <aside id="sidebar">
            <div class="dark">
                <h4>Contact Info</h4>
                    <p><h4>Chairperson:</h4> N/A</p>
                    <p><h4>Mobile:</h4> 086-3009797 </p>
                    <p> </p>
                    <p><h4>Hon. Secretary:</h4> Tony Colgan </p>
                    <p><h4>E-mail:</h4> tonycolgan@hotmail.co.uk </p>
            </div>
        </aside>
    </div>
    <a href="rush.php"><img src="img/carpool.png"></a>
</section>

<footer>
    <p>Football League, Copyright &copy; 2017</p>
</footer>
</body>
</html>