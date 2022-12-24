<?php
include("config.php");
error_reporting(0);
session_start();
mysqli_query($link,"DELETE FROM `rise_newsletter` WHERE id = '".$_GET['order_del']."'");
header("location:all_subscribers.php");  

?>
