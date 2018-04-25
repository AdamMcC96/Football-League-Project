<?php
session_start();  // needed in every page
if (isset($_POST['submit'])) { // if submit was pressed
    include_once 'leaguedb.php';
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $away = "SELECT awayTeam WHERE homeTeam LIKE '$search'";
    $awayTeam = mysqli_query($conn, $away);
    $sql = "SELECT * FROM fixtures  WHERE homeTeam LIKE '$search'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $home = "SELECT homeTeam FROM fixtures WHERE homeTeam LIKE '$search'";
    $homeTeam = mysqli_query($conn, $home);
    if ($resultCheck > 0){
        $handle = fopen("comments.html","a");
        fwrite($handle, "<b>" . $homeTeam . "vs. " . $awayTeam);
        fclose($handle);
    }else{
        $home = "SELECT homeTeam WHERE awayTeam LIKE '$search'";
        $homeTeam = mysqli_query($conn, $home);

    }
}
else {

}
?>
<!DOCTYPE html>
<html ng-app="directoryApp">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Football League">
    <meta name="keywords" content="Matches, Locations">
    <meta name="author" content="Adam McCarthy">
    <title>Football League | Welcome</title>
    <link rel="stylesheet" href="css/style.css">


</head>

<body ng-controller="directoryController as dirList">

<header>
    <div class="container">
        <div id="branding">
            <h1><span class="highlight">Football</span> League Fixtures</h1>
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
<section id="showcase">
    <div class="container">
        <h1></h1>
        <p></p>
    </div>
</section>

<section id="search">

    <div class="container">
        <h1>Search Fixtures</h1>
        <form>
            <input type="text" ng-model="search" placeholder="Search Fixtures...">



            <button ng-hide="dirList.toggle" ng-click=" dirList.toggle = true" class="button_1">Search Again </button>


        </form>

    </div>
</section>
<form class="search-form" action="fixtures.html" method="POST">
    <input type="text" name="search" placeholder="Team name">
    <br>
    <button type="submit" name="submit">Search</button><br>

</form>
<?php include "comments.html"; ?>
<footer>
    <p>Football League, Copyright &copy; 2017</p>
</footer>
</body>
</html>
