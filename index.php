<?php
session_start();  // needed in every page
?>
<!DOCTYPE html>

	<head>
		<meta charset="utf-8">
		<meta name="author" content="Adam McCarthy, Paul Lupu">
		<title>Football League | Welcome</title>
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
						<li class="current"><a href="index.php">Home</a></li>
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
		<section id="showcase">
			<div class="container">
				<h1></h1>
				<p></p>
			</div>
		</section>

		<section id="boxes">
			<div class="container">
				<div class="box">
                    <a href="livescore.php"><img src="img/find.png"></a>
					<h3>Live Updates</h3>
					<p>Get Matches details and location.</p>
				</div>

				<div class="box">
					<a href="fixtures.php"><img src="img/list.png"></a>
					<h3>List</h3>
					<p>See list of Matches</p>
				</div>

			</div>
		</section>
		<footer>
			<p>Football League, Copyright &copy; 2017</p>
		</footer>
	</body>
</html>