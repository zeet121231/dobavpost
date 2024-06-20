<?php
require_once 'connect.php';
$input = $_POST['input'];
$text_area = $_POST['text_area'];

$sql = "INSERT INTO `dobav`(`input`, `text_area`) VALUES ('$input','$text_area')";

mysqli_query($connect, $sql);
header('Location: index.html');




