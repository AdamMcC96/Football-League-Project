<?php
session_start();  // needed in every page
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Adam McCarthy">
        <title>Football League | Live Score</title>
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
                url:"selectScore.php",
                method:"POST",
                success:function(data){
                    $(\'#live_data\').html(data);
                }
            });
        }
        fetch_data();
        $(document).on(\'click\', \'#btn_add\', function(){
        
            var kickoff = $(\'#kickoff\').text();
            var teamA = $(\'#teamA\').text();
            var score1 = $(\'#score1\').text();
            var score2 = $(\'#score2\').text();
            var teamB = $(\'#teamB\').text();
            var minutes = $(\'#minutes\').text();
            
            if (kickoff == \'\') {
                alert("Enter Kick-Off Date/Time");
                return false;
            }
            if(teamA == \'\')
            {
                alert("Enter Home Team");
                return false;
            }
            if(score1 == \'\')
            {
                alert("Enter Home Team Score");
                return false;
            }
            if(score2 == \'\')
            {
                alert("Enter Away Team Score");
                return false;
            }
            if(teamB == \'\')
            {
                alert("Enter Away Team");
                return false;
            }
            if (minutes == \'\') {
                alert("Enter Minutes");
                return false;
            }
            $.ajax({
                url:"insertScore.php",
                method:"POST",
                data:{kickoff:kickoff, teamA:teamA, score1:score1, score2:score2, teamB:teamB, minutes:minutes},
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
                url:"editScore.php",
                method:"POST",
                data:{id:id, text:text, column_name:column_name},
                dataType:"text",
                success:function(data){
                    alert(data);
                }
            });
        }
        $(document).on(\'blur\', \'.kickoff\', function(){
            var id = $(this).data("id1");
            var kickoff = $(this).text();
            edit_data(id,kickoff, "kickoff");
        });
        $(document).on(\'blur\', \'.teamA\', function(){
            var id = $(this).data("id2");
            var teamA = $(this).text();
            edit_data(id, teamA, "teamA");
        });
        $(document).on(\'blur\', \'.score1\', function(){
            var id = $(this).data("id3");
            var score1 = $(this).text();
            edit_data(id,score1, "score1");
        });
        $(document).on(\'blur\', \'.score2\', function(){
            var id = $(this).data("id4");
            var score2 = $(this).text();
            edit_data(id,score2, "score2");
        });
        $(document).on(\'blur\', \'.teamB\', function(){
            var id = $(this).data("id5");
            var teamB = $(this).text();
            edit_data(id,teamB, "teamB");
        });
        $(document).on(\'blur\', \'.minutes\', function(){
            var id = $(this).data("id6");
            var minutes = $(this).text();
            edit_data(id,minutes, "minutes");
        });
        $(document).on(\'click\', \'.btn_delete\', function(){
            var id=$(this).data("id7");
            if(confirm("Are you sure you want to delete this?"))
            {
                $.ajax({
                    url:"deleteScore.php",
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
                url: "selectScore.php",
                method: "POST",
                success: function (data) {
                    $(\'#live_data\').html(data);
                }
            });
        }

        fetch_data();
        $(document).on(\'click\', \'#btn_add\', function () {
            var kickoff = $(\'#kickoff\').text();
            var teamA = $(\'#teamA\').text();
            var score1 = $(\'#score1\').text();
            var score2 = $(\'#score2\').text();
            var teamB = $(\'#teamB\').text();
            var minutes = $(\'#minutes\').text();
            
            if (kickoff == \'\') {
                alert("Enter Kick-Off Date/Time");
                return false;
            }
            if (teamA == \'\') {
                alert("Enter Home Team");
                return false;
            }
            if (score1 == \'\') {
                alert("Enter Home Team Score");
                return false;
            }
            if (score2 == \'\') {
                alert("Enter Away Team Score");
                return false;
            }
            if (teamB == \'\') {
                alert("Enter Away Team");
                return false;
            }
            if (minutes == \'\') {
                alert("Enter Minutes");
                return false;
            }
     
            $.ajax({
                url: "insertScore.php",
                method: "POST",
                data: {
                    kickoff:kickoff,
                    teamA: teamA,
                    score1: score1,
                    score2: score2,
                    teamB: teamB,
                    minutes:minutes
                    
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