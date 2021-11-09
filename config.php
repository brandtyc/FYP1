<?php
    // database connection code
    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $con = mysqli_connect('127.0.0.1', 'root', '','xfab');

    if ($con->connect_errno) {
        echo "Error: " . $con->connect_error;
    }
?>