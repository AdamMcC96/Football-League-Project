<?php
if($_POST){
    $name = $_POST['name'];
    $comment = $_POST['commentContent'];
    $pass = $_POST['pass'];
    $handle = fopen("comments.html","a");
    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
    fwrite($handle, "<b>" . $name . "</b>:<br/>" . $comment . "<br/>" . $hashedPass . "<br>");
    fclose($handle);

}
?>

<html>
<body>
<form action="" method="POST">
    Comments: <textarea rows="10" cols="30" name="commentContent"></textarea><br/>
    Name: <textarea rows="1" cols="30" name="name"></textarea><br/>
    Password: <textarea rows="1" cols="30" name="pass"></textarea><br/>
    <input type = "submit" value="Post!"><br/>
</form>
<?php include "comments.html"; ?>
</body>
</html>