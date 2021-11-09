<?php
    include "config.php"; // Using database connection file here

    $id = $_GET['id']; // get id through query string

    $del = mysqli_query($con, "delete from UserInput where id = '$id'"); // delete query

    if($del)
    {
        mysqli_close($con); // Close connection
        header("location:viewOrder.php"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting order"; // display error message if not delete
    }
?>