<?php
session_start();  // needed in every page
if (isset($_POST['submit'])) { // if submit was pressed
    include_once 'leaguedb.php';
    $uid = mysqli_real_escape_string($conn, $_POST['uid']); // adds uid to datbase (all code is converted to text for security)
    $pass = mysqli_real_escape_string($conn, $_POST['pass']); // adds pass to datbase (all code is converted to text for security)

    if (empty($uid) || empty($pass)) {
        header("Location: login.html?login=empty");
        exit(); // closes off script after
    }else {
        $sql ="SELECT * FROM players WHERE id = '$uid'";
        $result= mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1){
            $sql ="SELECT * FROM admin WHERE id = '$uid'";
            $result= mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck < 1){
                header("Location: login.html?login=error");
                exit(); // closes off script after
            }else {
                if ($row = mysqli_fetch_assoc($result)){
                    // dehash the password
                    $hashedPassCheck = password_verify($pass, $row['pass']);
                    if ($hashedPassCheck == false){
                        header("Location: login.html?login=password");
                        exit(); // closes off script after
                    } elseif ($hashedPassCheck == true) {
                        // log in user

                        $_SESSION['a_id'] = $row['id'];
                        header("Location: index.php?login=successful");
                        exit(); // closes off script after
                    }
                }
            }
        } else {
            if ($row = mysqli_fetch_assoc($result)){
                // dehash the password
                $hashedPassCheck = password_verify($pass, $row['pass']);
                if ($hashedPassCheck == false){
                    header("Location: login.html?login=password");
                    exit(); // closes off script after
                } elseif ($hashedPassCheck == true) {
                    // log in user
                   # $_SESSION['p_pid'] = $row['pid'];
                    $_SESSION['p_firstName'] = $row['firstName'];
                    $_SESSION['p_dob'] = $row['DOB'];
                    $_SESSION['p_lastName'] = $row['secondName'];
                    $_SESSION['p_email'] = $row['email'];
                    $_SESSION['p_id'] = $row['id'];
                    header("Location: index.php?login=successful");
                    exit(); // closes off script after
                }
            }
        }
    }
    /*$hashedPass = password_hash($pass, PASSWORD_DEFAULT); // hash the password
    $sql = "SELECT * FROM players WHERE id = '$uid' AND pass = '$hashedPass'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result); // checks how much rows there is from the result
    if ($resultCheck > 0) {
        header("Location: login.html?invalid"); // sends user back to login.html
        exit();
    }else{

        header("Location: indexPlayer.html?LoggedIn");

        exit();
    }*/


}
else {
    header("Location: login.html?login=error");
    exit(); // closes off script after
}