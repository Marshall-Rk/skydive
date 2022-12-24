<?php
session_start();
sleep(2);
$servername = "localhost";
$username = "root";
$password = "";
$db = "paragliding";

$first_name = $_POST['first_name'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$lgxemail = $_POST['lgxemail'];
$age = $_POST['age'];
$city = $_POST['city'];
$country = $_POST['country'];
$want_at = $_POST['want_at'];

$course_type = $_POST['course_type'];
$lgxmessage = $_POST['lgxmessage'];

$captcha=$_POST['captcha'];


if($_SESSION['CODE']==$captcha && !empty($_POST['first_name']) && !empty($_POST['gender']) && !empty($_POST['mobile']) && !empty($_POST['lgxemail'])&& !empty($_POST['age']) && !empty($_POST['city'])&& !empty($_POST['country'])&& !empty($_POST['want_at'])&& !empty($_POST['course_type'])&& !empty($_POST['lgxmessage']) ){
    
$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO course_enquiry(name,gender,mobile,email,age,city,country,date,course_type,message) VALUES('".$_POST['first_name']."','".$_POST['gender']."','".$_POST['mobile']."','".$_POST['lgxemail']."','".$_POST['age']."','".$_POST['city']."','".$_POST['country']."','".$_POST['want_at']."','".$_POST['course_type']."','".$_POST['lgxmessage']."')";


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