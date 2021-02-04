<?php
session_start();
?>
<?php
include 'dbhdata.inc.php';
if (isset($_SESSION['userId']))
{
    $userId = $_SESSION['userId'];
}

if (isset($_POST['checkedsubmit']))
{
    $checked = "Checked";

    $sql = "UPDATE data SET checked = '$checked' WHERE idusers_afterlogin='" . $userId . "' ORDER BY patient_id DESC LIMIT 1;";

    mysqli_query($conn, $sql);

    if (!$conn)
    {
        die('Database connection failed: ' . mysqli_connect_error());
    }
    header("Location: ../Display data.php?checked=success");
}

?>
