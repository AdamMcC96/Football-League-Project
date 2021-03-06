<?php
session_start();  // needed in every page
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Adam McCarthy">
		<title>Football League | Portrane Athletic FC</title>
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


		<section id="main">
			<div class="container">
				<article id="main-col">
					<h1 class="page-title">About Portrane Athletic FC</h1>
					<p>Portrane Athletic FC is a community-based club that facilitates competitive football for senior, under- age and over-35s players. It draws its membership from across the north County Dublin area.
					Since it was reconstituted in the early 1990's, Portrane has held unbroken membership of Dublin's Amateur Football League.
					The club is also proud to be inheritors of an illustrious local sporting heritage that links directly to one of the best junior football sides north Dublin has ever produced.
					Historic 1959 Bradmola Cup victory over Home Farm
					The original Portrane Athletic FC was formed around the middle of the 1900s and became one of the strongest football sides in all of Leinster. This team was based in the Burrow area of Portrane and drew its players almost completely from the locality. The profile the team enjoyed was remarkable given the size of the villages of Portrane and Donabate at that time.
					That Portrane Athletic FC team reached the peak of its powers in the late 1950's, a period during which the club enjoyed its highest profile success. The two-page programme on this page commemorates Portrane Athletic�s 1959 AUL Bradmola Cup final appearance � a game that the Portrane Athletic won.
					The final of the competition, one of the most prestigious open competitions in Leinster football at the time, was played at Tolka Park, Drumcondra. Bradmola FC was a factory team based at a nylon business in Blackrock which opened in 1936. They attracted better players because they could offer them employment and soon graduated to the Leinster Senior League in 1941. Bradmola were responsible for the donation of the famous Bradmola Cup to the AUL in 1939 and Portrane's victory in the competition � reported in all the national newspapers of the day � represented a definite highpoint .
					Portrane Athletic may have taken the Bradmola back to the peninsula in 1959 but Home Farm FC had their revenge the very next season when they beat the holders 5-2 at the Burrow. Home Farm stunned the big local crowd by taking a 2-0 lead early on and then made sure of victory by hitting the net again after the break. Portrane came back late on with Tierney and Pownall on the mark but it was, as the Irish Press reported, too little too late.
					</p>
				</article>

				<aside id="sidebar">
					<div class="dark">
					<h3>Contact Info</h4>
					<p><h4>Chairperson:</h4> Gerard Duke</p>
					<p><h4>Mobile:</h4> 086-8294399</p>
					<p> </p>
					<p><h4>Hon. Secretary:</h4> Anthony Moore</p>
					<p><h4>E-mail:</h4> info@portraneafc.com</p>
					<p><h4>Mobile:</h4> 087-1782838</p>
					</div>
				</aside>
			</div>
			<a href="portrane.php"><img src="img/carpool.png"></a>
		</section>

		<footer>
			<p>Football League, Copyright &copy; 2017</p>
		</footer>
	</body>
</html>