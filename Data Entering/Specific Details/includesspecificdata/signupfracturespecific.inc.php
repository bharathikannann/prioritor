<?php
session_start();
?>
<?php
include_once 'dbhspecificdata.inc.php';
if (isset($_POST['fracturesubmit']))
{

    if (isset($_POST["typeopenclosed"]))
    {
        $typeopenclosed = $_POST["typeopenclosed"];
    }
    else
    {
        $typeopenclosed = "NotEntered";
    }

    if (isset($_POST["typecompleteIncomplete"]))
    {
        $typecompleteIncomplete = $_POST["typecompleteIncomplete"];
    }
    else
    {
        $typecompleteIncomplete = "NotEntered";
    }
    if (isset($_POST["areaoffracture"]))
    {
        if ($_POST["areaoffracture"] == "Not Selected")
        {
            $areaoffracture = "NotEntered";
        }
        else
        {
            $areaoffracture = $_POST["areaoffracture"];
        }
    }

    $userId = $_SESSION['userId'];

    $sql = "UPDATE fracturespecific SET type_open_closed = '$typeopenclosed' ,
         type_complete_incomplete = '$typecompleteIncomplete' ,
 	    area_of_fracture='$areaoffracture' 
 	    WHERE idusers_afterlogin='" . $userId . "' 
 	    ORDER BY id DESC LIMIT 1;";
    mysqli_query($conn, $sql);

    header("Location: ../Fracture Specific.php?signupspecificdata=success");

}

