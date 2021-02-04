<?php
session_start();
?>

<?php
include_once 'dbhdata.inc.php';

if (isset($_POST["submit"]))
{

    $userId = $_SESSION['userId'];
    if ($_POST["firstname"])
    {
        $name = $_POST["firstname"];
    }
    else
    {
        $name = "--";
    }

    if ($_POST["ageofpatient"])
    {
        $age = $_POST["ageofpatient"];
    }
    else
    {
        $age = $_POST["ageofpatientslider"];
    }

    if (isset($_POST["gender"]))
    {
        if ($_POST["gender"] == "Notselected")
        {
            $gender = "--";
        }
        else
        {
            $gender = $_POST["gender"];
        }
    }

    if ($_POST["weightofpatient"])
    {
        $weight = $_POST["weightofpatient"];
    }
    else
    {
        $weight = $_POST["weightofpatientslider"];
    }

    if (isset($_POST["bloodgroup"]))
    {
        if ($_POST["bloodgroup"] == "Notselected")
        {
            $bloodgroup = "--";
        }
        else
        {
            $bloodgroup = $_POST["bloodgroup"];
        }
    }

    if (isset($_POST["bloodpressure"]))
    {
        if ($_POST["bloodpressure"] == "Notselected")
        {
            $bloodpressure = "--";
        }
        else
        {
            $bloodpressure = $_POST["bloodpressure"];
        }
    }

    if ($_POST["SpO2level"])
    {
        $SpO2level = $_POST["SpO2level"];
    }
    else
    {
        $SpO2level = $_POST["SpO2levelslider"];
    }

    if (isset($_POST["problem"]))
    {
        $problemarr = $_POST["problem"];
        $problems = implode(",", $problemarr);
    }
    else
    {
        $problems = "--";
    }

    if ($_POST["anyotherproblems"])
    {
        $anyotherproblems = $_POST["anyotherproblems"];
    }
    else
    {
        $anyotherproblems = "None";
    }

    $sql = "INSERT INTO data (idusers_afterlogin,patient_name,patient_age,patient_gender,patient_weight,patient_bloodgroup,patient_bloodpressure,patient_SpO2level,problems,other_problems) VALUES ($userId,'$name',$age,'$gender',$weight,'$bloodgroup','$bloodpressure',$SpO2level,'$problems','$anyotherproblems');";

    mysqli_query($conn, $sql);

    $sql1 = "INSERT INTO burnsspecific (idusers_afterlogin,degreeofburn,bsavalue) VALUES ($userId,'NotEntered',0);";

    mysqli_query($conn, $sql1);

    $sql2 = "INSERT INTO fracturespecific (idusers_afterlogin,type_open_closed,type_complete_incomplete,area_of_fracture) VALUES ($userId,'NotEntered','NotEntered','NotEntered');";

    mysqli_query($conn, $sql2);

    $sql3 = "INSERT INTO headdamagespecific (idusers_afterlogin,open_closed,velocity_injury,mild_moderate_severe) VALUES ($userId,'NotEntered','NotEntered','NotEntered');";

    mysqli_query($conn, $sql3);

    $sql3 = "INSERT INTO bloodlossspecific (idusers_afterlogin,bleeding_class,i_e_bleeding) VALUES ($userId,'NotEntered','NotEntered');";

    mysqli_query($conn, $sql3);

    if (!$conn)
    {
        die('Database connection failed: ' . mysqli_connect_error());
    }

    header("Location: ../main page ambulance.php?signupdata=success");

}

