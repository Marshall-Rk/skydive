<?php
session_start();
sleep(2);
$servername = "localhost";
$username = "root";
$password = "";
$db = "paragliding";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$mobile = $_POST['mobile'];

$email = $_POST['lgxemail'];
$lgxsubject = $_POST['lgxsubject'];
$lgxmessage = $_POST['lgxmessage'];
$captcha=$_POST['captcha'];



if($_SESSION['CODE']==$captcha && !empty($_POST['lgxemail']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['mobile'])&& !empty($_POST['lgxsubject'])){
    
    

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO contact(first_name,last_name,mobile,email,subject,message) VALUES('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['mobile']."','".$_POST['lgxemail']."','".$_POST['lgxsubject']."','".$_POST['lgxmessage']."')";


if ($conn->query($sql) === TRUE) {

echo 'Thank you for showing interest'; 


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

else{
	echo "All fields are required";
}








?>