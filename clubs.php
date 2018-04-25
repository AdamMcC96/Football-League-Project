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
		<title>Football League | Club</title>
		<link rel="stylesheet" href="./css/style.css">
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
						<li class="current"><a href="clubs.php">Clubs</a></li>
                        <li><a href="leagueTable.php">League Table</a></li>
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
					<h1 class="page-title">Clubs</h1>
					<li><a href="portraneInfo.php"><img src="img/portrane.jpg"></a></li>
					<li><a href="corduffInfo.php"><img src="img/corduff.png"></a></li>
					<li><a href="rushInfo.php"><img src="img/rush.jpg"></a></li>
					<li><a href="leixlipInfo.php"><img src="img/leixlip.png"></a></li>
					<li><a href="itasInfo.php"><img src="img/itas.png"></a></li>
					<li><a href="donnycarneyInfo.php"><img src="img/donnycarney.png"></a></li>
                    <li><a href="tyrrelstownInfo.php"><img src="img/tyrrelstown.jpg"></a></li>
                    <li><a href="scelticInfo.php"><img src="img/sceltic.png"></a></li>
                    <li><a href="balbrigganInfo.php"><img src="img/balbriggan.png"></a></li>
                    <li><a href="malahideInfo.php"><img src="img/malahide.png"></a></li>
                    <li><a href="smanorInfo.php"><img src="img/smanor.png"></a></li>


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