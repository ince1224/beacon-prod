<?php
$uploadDir = 'uploads/';
$profilePicture = $_FILES['profile_picture']['name'];
$profilePictureTmp = $_FILES['profile_picture']['tmp_name'];

$targetFilePath = $uploadDir . basename($profilePicture);
move_uploaded_file($profilePictureTmp, $targetFilePath);

echo $targetFilePath;
?>
