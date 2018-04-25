<?php
$connect = mysqli_connect("localhost", "root", "root", "groupproject");
$sql = "INSERT INTO fixture( kickoff, teamA, teamB, location) VALUES('".$_POST["kickoff"]."', '".$_POST["teamA"]."', '".$_POST["teamB"]."', '".$_POST["location"]."')";
if(mysqli_query($connect, $sql))
{
    echo 'Data Inserted';
}
?>