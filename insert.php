<?php
$connect = mysqli_connect("localhost", "root", "root", "groupproject");
$sql = "INSERT INTO club( place, teamName, gamePlayed, wins, draws, loses, goalDif, points) VALUES('".$_POST["place"]."', '".$_POST["teamName"]."', '".$_POST["gamePlayed"]."', '".$_POST["wins"]."', '".$_POST["draws"]."', '".$_POST["loses"]."', '".$_POST["goalDif"]."', '".$_POST["points"]."')";
if(mysqli_query($connect, $sql))
{
    echo 'Data Inserted';
}
?>