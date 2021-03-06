<?php
session_start();  // needed in every page
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Adam McCarthy">
    <title>Football League | League Table</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
        <br />
        <br />
        <br />
        <div class="table-responsive">
            <div id="live_data"></div>
        </div>
    </div>
</section>

<footer>
    <p>Football League, Copyright &copy; 2017</p>
</footer>
</body>
</html>
<?php
if(isset($_SESSION['a_id'])){
    echo '<script>
    $(document).ready(function(){
        function fetch_data()
        {
            $.ajax({
                url:"select.php",
                method:"POST",
                success:function(data){
                    $(\'#live_data\').html(data);
                }
            });
        }
        fetch_data();
        $(document).on(\'click\', \'#btn_add\', function(){
            var place = $(\'#place\').text();
            var teamName = $(\'#teamName\').text();
            var gamePlayed = $(\'#gamePlayed\').text();
            var wins = $(\'#wins\').text();
            var draws = $(\'#draws\').text();
            var loses = $(\'#loses\').text();
            var goalDif = $(\'#goalDif\').text();
            var points = $(\'#points\').text();
            if(place == \'\')
            {
                alert("Enter #");
                return false;
            }
            if(teamName == \'\')
            {
                alert("Enter Team Name");
                return false;
            }
            if(gamePlayed == \'\')
            {
                alert("Enter Games Played");
                return false;
            }
            if(wins == \'\')
            {
                alert("Enter Wins");
                return false;
            }
            if(draws == \'\')
            {
                alert("Enter Draws");
                return false;
            }
            if(loses == \'\')
            {
                alert("Enter Loses");
                return false;
            }
            if(goalDif == \'\')
            {
                alert("Enter Goal Difference");
                return false;
            }
            if(points == \'\')
            {
                alert("Enter Points");
                return false;
            }
            $.ajax({
                url:"insert.php",
                method:"POST",
                data:{place:place, teamName:teamName, gamePlayed:gamePlayed, wins:wins, draws:draws, loses:loses, goalDif:goalDif, points:points},
                dataType:"text",
                success:function(data)
                {
                    alert(data);
                    fetch_data();
                }
            })
        });
        function edit_data(id, text, column_name)
        {
            $.ajax({
                url:"edit.php",
                method:"POST",
                data:{id:id, text:text, column_name:column_name},
                dataType:"text",
                success:function(data){
                    alert(data);
                }
            });
        }
        $(document).on(\'blur\', \'.place\', function(){
            var id = $(this).data("id1");
            var place = $(this).text();
            edit_data(id, place, "place");
        });
        $(document).on(\'blur\', \'.teamName\', function(){
            var id = $(this).data("id2");
            var teamName = $(this).text();
            edit_data(id,teamName, "teamName");
        });
        $(document).on(\'blur\', \'.gamePlayed\', function(){
            var id = $(this).data("id3");
            var gamePlayed = $(this).text();
            edit_data(id,gamePlayed, "gamePlayed");
        });
        $(document).on(\'blur\', \'.wins\', function(){
            var id = $(this).data("id4");
            var wins = $(this).text();
            edit_data(id,wins, "wins");
        });
        $(document).on(\'blur\', \'.draws\', function(){
            var id = $(this).data("id5");
            var draws = $(this).text();
            edit_data(id,draws, "draws");
        });
        $(document).on(\'blur\', \'.loses\', function(){
            var id = $(this).data("id6");
            var loses = $(this).text();
            edit_data(id,loses, "loses");
        });
        $(document).on(\'blur\', \'.goalDif\', function(){
            var id = $(this).data("id7");
            var goalDif = $(this).text();
            edit_data(id,goalDif, "goalDif");
        });
        $(document).on(\'blur\', \'.points\', function(){
            var id = $(this).data("id8");
            var points = $(this).text();
            edit_data(id,points, "points");
        });
        $(document).on(\'click\', \'.btn_delete\', function(){
            var id=$(this).data("id9");
            if(confirm("Are you sure you want to delete this?"))
            {
                $.ajax({
                    url:"delete.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"text",
                    success:function(data){
                        alert(data);
                        fetch_data();
                    }
                });
            }
        });
    });
</script>';
}else {
    echo '<script>
    $(document).ready(function() {
        function fetch_data() {
            $.ajax({
                url: "select.php",
                method: "POST",
                success: function (data) {
                    $(\'#live_data\').html(data);
                }
            });
        }

        fetch_data();
        $(document).on(\'click\', \'#btn_add\', function () {
            var place = $(\'#place\').text();
            var teamName = $(\'#teamName\').text();
            var gamePlayed = $(\'#gamePlayed\').text();
            var wins = $(\'#wins\').text();
            var draws = $(\'#draws\').text();
            var loses = $(\'#loses\').text();
            var goalDif = $(\'#goalDif\').text();
            var points = $(\'#points\').text();
            if (place == \'\') {
                alert("Enter #");
                return false;
            }
            if (teamName == \'\') {
                alert("Enter Team Name");
                return false;
            }
            if (gamePlayed == \'\') {
                alert("Enter Games Played");
                return false;
            }
            if (wins == \'\') {
                alert("Enter Wins");
                return false;
            }
            if (draws == \'\') {
                alert("Enter Draws");
                return false;
            }
            if (loses == \'\') {
                alert("Enter Loses");
                return false;
            }
            if (goalDif == \'\') {
                alert("Enter Goal Difference");
                return false;
            }
            if (points == \'\') {
                alert("Enter Points");
                return false;
            }
            $.ajax({
                url: "insert.php",
                method: "POST",
                data: {
                    place: place,
                    teamName: teamName,
                    gamePlayed: gamePlayed,
                    wins: wins,
                    draws: draws,
                    loses: loses,
                    goalDif: goalDif,
                    points: points
                },
                dataType: "text",
                success: function (data) {
                    alert(data);
                    fetch_data();
                }
            })
        });
    });
</script>';
}?>
