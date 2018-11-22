<?php

    $f = fopen('projBMRThanks.html', 'r');
    $s = fread($f, filesize('projBMRThanks.html'));
    fclose($f);

    $servername = 'localhost:3306';
    $username = 'admin';
    $password = 'abcdefgh';

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    $conn->query("CREATE DATABASE WTproject;");

    mysqli_close($conn);

    echo $s;

?>
