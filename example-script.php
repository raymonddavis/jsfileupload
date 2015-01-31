<?php
header('Content-Type: application/json');

$des = '/var/www/git/jsfileupload/uploads/';

move_uploaded_file($_FILES['file']['tmp_name'], $des.$_FILES['file']['name']);

if (file_exists($des.$_FILES['file']['name']))
	echo json_encode($_FILES['file']['name']);
else
	echo json_encode('Failed');
?>