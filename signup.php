<?php
/**
 * User: Adam
 */
// URGENT: MOVE TO FOOTBALL LEAGUE FOLDER

if (isset($_POST['submit'])) { // if submit was pressed
    include_once 'leaguedb.php';
    $first = mysqli_real_escape_string($conn, $_POST['first']); // adds first name to datbase (all code is converted to text for security)
    $last = mysqli_real_escape_string($conn, $_POST['last']); // adds first name to datbase (all code is converted to text for security)
    $dob = mysqli_real_escape_string($conn, $_POST['dob']); // adds first name to datbase (all code is converted to text for security)
    $email = mysqli_real_escape_string($conn, $_POST['email']); // adds email to datbase (all code is converted to text for security)
    $pass = mysqli_real_escape_string($conn, $_POST['pass']); // adds pass to datbase (all code is converted to text for security)
    $uid = mysqli_real_escape_string($conn, $_POST['uid']); // adds uid to datbase (all code is converted to text for security)
    $user = mysqli_real_escape_string($conn, $_POST['user']); // adds user to datbase (all code is converted to text for security)

    // Error Handlers
    // 1. Check for empty fields
    if (empty($first) || empty($last) || empty($dob) || empty($email) || empty($pass) || empty($uid)) { // if $input is empty
        header("Location: singup.html?signup=empty"); // sends user back to singup.html
        exit(); // closes off script after
    } else {
        // Check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) { // if first/last name is invalid
            header("Location: singup.html?signup=invalid"); // sends user back to singup.html
            exit(); // closes off script after
        }
        else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){ // Check if email is valid
                header("Location: signup.html?singup=email");
                exit();
            }
            else {
                $sql = "SELECT * FROM players p, manager m, referee r WHERE p.id = '$uid' || m.id = '$uid' || r.id = '$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result); // checks how much rows there is from the result

                if ($resultCheck > 0) { // if there is more than 0 results
                    header("Location: signup.html?signup=usernametaken");
                    exit();
                }
                else {

                    $hashedPass = password_hash($pass, PASSWORD_DEFAULT); // hash the password
                    $radioVal = $_POST[$user];
                    if ($radioVal == "Referee"){
                        $sql = "INSER INTO referee VALUES ('$uid','$first','$hashedPass','$last','$email','$dob');";
                        mysqli_query($conn, $sql);
                        header("Location: signup.html?signup=successful");
                    }
                    elseif ($radioVal = "Player"){
                        $sql = "INSER INTO players VALUES ('$uid','$first','$dob','$last','$email','$hashedPass');";
                        mysqli_query($conn, $sql);
                        header("Location: signup.html?signup=successful");

                    }
                    else {
                        $sql = "INSER INTO manager VALUES ('$uid','$first','$hashedPass','$last','$dob','$email');";
                        mysqli_query($conn, $sql);
                        header("Location: signup.html?signup=successful");

                    }
                }
            }
        }
    }
}else {
    header("Location: singup.html"); // sends user back to singup.html
    exit(); // closes off script after
}