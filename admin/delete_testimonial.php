<?php
include("config.php");
error_reporting(0);
session_start();
mysqli_query($link,"DELETE FROM testimonial WHERE id ='".$_GET['menu_del']."'");
header("location:all_testimonial.php");  

?>
