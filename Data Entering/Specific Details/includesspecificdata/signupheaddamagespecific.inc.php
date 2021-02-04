<?php
session_start();
?>
<?php
include_once 'dbhspecificdata.inc.php';
if (isset($_POST['headdamagesubmit']))
{

    if (isset($_POST["openclosedinjury"]))
    {
        $openclosedinjury = $_POST["openclosedinjury"];
    }
    else
    {
        $openclosedinjury = "NotEntered";
    }

    if (isset($_POST["velocityinjury"]))
    {
        $velocityinjury = $_POST["velocityinjury"];
    }
    else
    {
        $velocityinjury = "NotEntered";
    }

    if (isset($_POST["mildmoderatesevereinjury"]))
    {
        $mildmoderatesevereinjury = $_POST["mildmoderatesevereinjury"];
    }
    else
    {
        $mildmoderatesevereinjury = "NotEntered";
    }
    $userId = $_SESSION["userId"];

    $sql = "UPDATE headdamagespecific SET open_closed = '$openclosedinjury' ,
          velocity_injury = '$velocityinjury' ,
          mild_moderate_severe= '$mildmoderatesevereinjury'
  	    WHERE idusers_afterlogin='" . $userId . "' 
  	    ORDER BY id DESC LIMIT 1;";
    mysqli_query($conn, $sql);

    header("Location: ../Head Damage.php?signupspecificdata=success");

}
else
{
    echo "Please try again later";
}

