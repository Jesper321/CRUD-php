<?php
include 'connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$query = "DELETE FROM tabellen WHERE id=$id";
$stmt = $conn->prepare($query);
$stmt->execute();
header("location: index.php");
?>