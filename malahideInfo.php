<?php
session_start();  // needed in every page
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Adam McCarthy">
    <title>Football League | Malahide United FC</title>
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
            <h1 class="page-title">About Malahide United FC</h1>
            <p>
                Although Malahide United was officially formed in 1969, there was life before 1969. Stalwarts such as Michael Ginnetty and Seamus Lawlor constantly remind us of that fact. The Club had existed in 1959/60,1960/61 and 1961/62 seasons before a shortage of local players caused the Club to fold. A team called Ormeau arrived in Leixlip in the early sixties and everyone interested in playing soccer joined this club.George Bendal an ex-Manchester goalkeeper was the main man. Local players at that time included Dave Kelly, Daithi Heffernan, Theo Watkins later to become an International Youth goalkeeper and Christy Maher. When George died in 1966 the club folded .In 1969, their first season Malahide United fielded two senior teams, playing in A.U.L. Div. 3A Sun. and Leinster Junior League Counties Div. John Giltrap  was the first manager. Our present Club President Brian Watters was the trainer. During the next couple of seasons the 1st team set up a very impressive record going fifty-eight league games undefeated. This run brought the team through the A.U.L. Div. 2 and the A.U.L. Div. 1 as winners. <br>
                <br>
                The Club fielded the first schoolboy team in 1970/71, an Under 14 team in the Dublin and District Schoolboy League, managed by Sean Purcell. From 1974/75 season the housing boom in Leixlip gave the schoolboy section the opportunity to grow. That year the club fielded three teams, a 12 Div. 0, managed by Ray McCauley and Bracey Daniels, a 15E side managed by  Larry Harte and a Youths team managed by Michael Farnan and Larry Kenny. <br>
                <br>
                For many years the Club were soccer nomads moving from ground to ground with no proper home. We first commenced playing on a pitch at the Green lane where Scoil Mhuire and Scoil Bhride now stand. This pitch had been acquired as parish land for the building of schools. When the builders moved in  , we used the portion of the land where Scoil Eoin Phoil is to day. The seniors moved on to a pitch at Newtown where the Avondale houses are now built. The schoolboys continued to play at the Green lane , but the senior’s next port of call was Dodsboro in Lucan with the kind co-operation of Lucan United. In 1975 the Club accepted the kind offer from the Hon. Desmond Guinness and set up a home for the seniors at the Castle grounds. The entrance was at the back of the Ryevale Tavern.  Many hours were spent hacking out steps leading up to the wooden steps used to scale the wall. In October 1979 we saw the formation of Leixlip Amenities Group. The Group was representative of the various clubs and organisations seeking sporting and recreational facilities for Leixlip. L.A.G. set about the raising of finance. Kildare County Council gave a commitment to purchase amenity land provided a local contribution of 25% was forthcoming. Malahide United committed practically all their funds to the venture. Thirty acres of land were purchased in July 1980. Malahide United were allocated space. The schoolboys moved to the Amenities in November 1982 and made it their permanent base. Kildare Co.Co. made two mobile homes available for £40. The seniors continued to play on the Castle Grounds during the 1982/83 and 1983/84 seasons before they too moved to the Amenities Centre in 1984/85. During the 1984/85 season with the increased number of teams and the unavailability of the allocated pitches due to drainage problems the Club was in trouble again.
            </p>
        </article>

        <aside id="sidebar">
            <div class="dark">
                <h4>Contact Info</h4>
                <p><h4>Chairperson:</h4> </p>
                <p><h4>Mobile:</h4> </p>
                <p> </p>
                <p><h4>Hon. Secretary:</h4> </p>
                <p><h4>E-mail:</h4> </p>
                <p><h4>Mobile:</h4> </p>
            </div>
        </aside>
    </div>
    <a href="malahide.php"><img src="img/carpool.png"></a>
</section>

<footer>
    <p>Football League, Copyright &copy; 2017</p>
</footer>
</body>
</html>