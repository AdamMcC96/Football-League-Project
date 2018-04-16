<?php
if($_POST){
    $name = $_POST['name'];
    $comment = $_POST['commentContent'];
    $handle = fopen("comments.html","a");
    fwrite($handle, "<b>" . $name . "</b>:<br/>" . $comment . "<br/>");
    fclose($handle);
}
?>

<html>
<body>
<form action="" method="POST">
    Comments: <textarea rows="10" cols="30" name="commentContent"></textarea><br/>
    Name: <textarea rows="1" cols="30" name="name"></textarea><br/>
    <input type = "submit" value="Post!"><br/>
</form>
<?php include "comments.html"; ?>
</body>
</html>