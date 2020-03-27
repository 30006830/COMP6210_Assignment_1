<?php 
    //Create database variable
    $user = "a3000683_Blake";
    $password = "bigstronkpassword";
    $db = "a3000683_SCP_DATABASE";

    //Create php db connection object
    $connection = new mysqli('localhost', $user, $password, $db) or die(mysqli_error($connection));

    //Get all data from table and save into variable for use on page app
    $result = $connection->query("select * from DATABASE_SCP") or die($connection->error());

    ?>

