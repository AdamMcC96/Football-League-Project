<?php
$connect = mysqli_connect("localhost", "root", "root", "groupproject");
$sql = "DELETE FROM game WHERE id = '".$_POST["id"]."'";
if(mysqli_query($connect, $sql))
{
    echo 'Data Deleted';
}
?>