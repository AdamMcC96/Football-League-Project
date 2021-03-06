<?php
session_start();  // needed in every page
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Football League | Corduff FC</title>
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
            <h1 class="page-title">About Corduff FC</h1>
            <p>
                Corduff Football Club is the largest soccer club in Northern Blanchardstown, Dublin. Corduff FC was formed at senior level in 1976. Perhaps uniquely, Corduff charges weekly fees rather than annual subscriptions so there are no upfront signing on fees, registration fees, insurance fees, and no training fee. Before any player kicks a football, everything is looked after. Equipment, insurance, league fees, pitch fees etc. are all paid for without imposing pressure on players and parents
            </p>
        </article>

        <aside id="sidebar">
            <div class="dark">
                <h4>Contact Info</h4>
                    <p><h4>Chairperson:</h4>  </p>
                    <p><h4>Mobile:</h4> </p>
                    <p> </p>
                    <p><h4>Hon. Secretary:</h4>  </p>
                    <p><h4>E-mail:</h4> </p>
                    <p><h4>Mobile:</h4> </p>
            </div>
        </aside>
    </div>
    <a href="corduff.php"><img src="img/carpool.png"></a>
</section>

<footer>
    <p>Football League, Copyright &copy; 2017</p>
</footer>
</body>
</html>