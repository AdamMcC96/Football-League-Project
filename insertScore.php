<?php
$connect = mysqli_connect("localhost", "root", "root", "groupproject");
$sql = "INSERT INTO game( kickoff, teamA, score1, score2, teamB, minutes) VALUES('".$_POST["kickoff"]."', '".$_POST["teamA"]."', '".$_POST["score1"]."', '".$_POST["score2"]."', '".$_POST["teamB"]."', '".$_POST["minutes"]."')";
if(mysqli_query($connect, $sql))
{
    echo 'Data Inserted';
}
?>