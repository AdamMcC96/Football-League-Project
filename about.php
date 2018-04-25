<?php
session_start();  // needed in every page
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Find fixtures of Matches">
		<meta name="keywords" content="Matches, Locations">
		<meta name="author" content="Adam McCarthy, Paul Lupu">
		<title>Football League | About</title>
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
						<li class="current"><a href="about.php">About</a></li>
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
				<h1>Football League</h1>
			<form>
				<input type="word" placeholder="Search Fixtures...">
				<button type="search" class="button_1">Search </button>
			</form>
			</div>
		</section>

		<section id="main">
			<div class="container">
				<article id="main-col">
					<h1 class="page-title">About Us</h1>
					<p>
					We are aiming to develop a website to help the amateur football leagues become more professional and increase their fanbase.
					</p>
					<p>
					We will do this by implementing a number of features such as live match updates, player profiles with stats, training and carpool organiser and much more.
					</p>
				</article>

				<aside id="sidebar">
					<div class="dark">
					<h3>Features</h3>
					<p>
					Live Updates
					</p>
					<p>
					Player & Manager Profiles
					</p>
					<p>
					Club Page
					</p>
					<p>
					Fixtures/Results List
					<p>
					</div>
				</aside>
			</div>
		</section>

		<footer>
			<p>Football League, Copyright &copy; 2017</p>
		</footer>
	</body>
</html>