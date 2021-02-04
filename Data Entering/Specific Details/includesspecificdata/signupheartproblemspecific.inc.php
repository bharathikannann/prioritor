<?php
session_start();
?>
<?php
include_once 'dbhspecificdata.inc.php';

$bloodlossclass = $_POST["bloodlossclass"];
$internalexternalbleeding = $_POST["internalexternalbleeding"];

$sql = "INSERT INTO bloodlossspecific (bleeding_class,i_e_bleeding) VALUES ('$bloodlossclass','$internalexternalbleeding');";
mysqli_query($conn, $sql);

header("Location: ../Heart Problem Specific.php?signupspecificdata=success");

