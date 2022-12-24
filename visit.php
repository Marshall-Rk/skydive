<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "paragliding";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    if(!isset($_COOKIE['visit'])){
        setCookie('visit','yes',time()+(60*60*24*30));
        mysqli_query($conn,"UPDATE `visits` set visits=visits+1");
    }
       
    $conn->close();
?>
