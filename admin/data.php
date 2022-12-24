<?php
header('Content-Type: application/json');

require_once('db.php');

$sqlQuery = "SELECT id,email,date FROM risebrochure ORDER BY id";

$result = mysqli_query($link,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($link);

echo json_encode($data);
?>