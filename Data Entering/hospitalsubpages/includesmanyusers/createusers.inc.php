<?php
session_start();
include_once 'dbh.inc.php';
if (isset($_POST["ambulance-createuser-submit"]))
{

    $userId = $_SESSION['userId'];
    $userUid = $_SESSION['userUid'];
    // Testing
    // echo ("$userUid");

    $password = $_POST["ambulancepwd"];
    $passwordrepeat = $_POST["ambulancepwd-repeat"];

    if (empty($password) || empty($passwordrepeat))
    {
        header("Location: ../createambulanceuser.php?error=emptyfields&uid=" . $password . "&email=" . $passwordrepeat);
        exit();
    }
    elseif ($password !== $passwordrepeat)
    {
        header("Location: ../createambulanceuser.php?error=passwordcheck&uid=" . $password . "&email=" . $passwordrepeat);
        exit();
    }
    else
    {
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET ambulancePassword = '$hashedPwd'
  	    WHERE idusers='" . $userId . "' ;";
        mysqli_query($conn, $sql);
        header("Location: ../createambulanceuser.php");
    }
        

}
else
{
    header("Location: ../createambulanceuser.php");
    exit();
}

