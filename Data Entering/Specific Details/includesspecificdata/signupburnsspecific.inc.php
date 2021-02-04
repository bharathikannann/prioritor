<?php
session_start();
?>
<?php
include_once 'dbhspecificdata.inc.php';

if (isset($_POST['burnssubmit']))
{

    if (isset($_POST["degreeofburn"]))
    {
        if ($_POST["degreeofburn"] == "Not Selected")
        {
            $degreeofburns = "NotEntered";
        }
        else
        {
            $degreeofburns = $_POST["degreeofburn"];
        }
    }

    $leftarm = $_POST["leftarm"];
    $rightarm = $_POST["rightarm"];
    $head = $_POST["head"];
    $chest = $_POST["chest"];
    $abdomen = $_POST["abdomen"];
    $back = $_POST["back"];
    $leftleg = $_POST["leftleg"];
    $rightleg = $_POST["rightleg"];
    $groin = $_POST["groin"];
    $userId = $_SESSION["userId"];

    $BSAValue = $leftarm + $rightarm + $head + $chest + $abdomen + $back + $leftleg + $rightleg + $groin;

    $sql = "UPDATE burnsspecific SET degreeofburn = '$degreeofburns' , bsavalue = $BSAValue WHERE idusers_afterlogin='" . $userId . "' ORDER BY id DESC LIMIT 1;";
    mysqli_query($conn, $sql);

    header("Location: ../Burns Specific.php?signupspecificdata=success");

}
else
{
    echo "Not Submitted. Please return to login page and try again";
}

