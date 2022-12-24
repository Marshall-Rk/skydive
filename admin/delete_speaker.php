<?php
include("db.php");
error_reporting(0);
session_start();
mysqli_query($link,"DELETE FROM rise_speakers_2022 WHERE id = '".$_GET['menu_del']."'");
header("location:all_speakers.php");  

?>
