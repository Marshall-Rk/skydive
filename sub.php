<?php
sleep(3);

$servername = "localhost";
$username = "root";
$password = "";
$db = "paragliding";

$email = $_POST['email'];


// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO newsletter(email) VALUES('".$_POST['email']."')";


if ($conn->query($sql) === TRUE)
{
echo '<script type="text/javascript">'; 
echo 'alert("Thank you for showing interest in Retail Technolgy Conlave 2022");'; 
echo '</script>';
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();



?>