<?php

$mysqli = new mysqli('localhost','a3000683_Blake','bigstronkpassword', 'a3000683_SCP_DATABASE')
 or die(mysqli_error($mysqli));

//takes input from the form and submits it to the database
if(isset($_POST['itemNo']))
{
    $itemNo = $_POST['itemNo'];
    $objectClass = $_POST['objectClass'];
    $objectProcedure = mysqli_real_escape_string($mysqli, $_POST['objectProcedure']);
    $explanation = mysqli_real_escape_string($mysqli, $_POST['explanation']);

    //inserts the data into the database
    $mysqli->query("INSERT INTO `DATABASE_SCP` (`id`, `itemNo`, `objectClass`, `objectProcedure`, `explanation`) VALUES (NULL, '$itemNo', '$objectClass', '$objectProcedure', '$explanation') ") or die($mysqli->error);

    //redirects back to the specified page
    header("Location: scpfiles.php");
}

//select data from db
$result = $mysqli->query("SELECT * FROM `DATABASE_SCP`") or die(mysqli_error($mysqli));

// delete data from database.
if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $mysqli->query("delete from DATABASE_SCP where id=$id") or die($mysqli->error);

    header("Location: scpfiles.php");
}

?>