<?php
session_start();
?>
<?php
include_once 'dbhspecificdata.inc.php';
if (isset($_POST['bloodlosssubmit']))
{

    if (isset($_POST["bloodlossclass"]))
    {
        if ($_POST["bloodlossclass"] == "Not Entered")
        {
            $bloodlossclass = "NotEntered";
        }
        else
        {
            $bloodlossclass = $_POST["bloodlossclass"];
        }
    }

    if (isset($_POST["internalexternalbleeding"]))
    {
        $internalexternalbleedingarr = $_POST["internalexternalbleeding"];
        $internalexternalbleeding = implode(",", $internalexternalbleedingarr);
    }
    else
    {
        $problems = "NotEntered";
    }
    $userId = $_SESSION["userId"];

    $sql = "UPDATE bloodlossspecific SET bleeding_class = '$bloodlossclass' ,
          i_e_bleeding = '$internalexternalbleeding'
  	    WHERE idusers_afterlogin='" . $userId . "' 
  	    ORDER BY id DESC LIMIT 1;";
    mysqli_query($conn, $sql);

    header("Location: ../Blood loss Specific.php?signupspecificdata=success");
}

