<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $year = $_POST['year'];

    echo "name = ".$name;

    $query = "INSERT INTO tabellen (name, surname, year) VALUES ('".$name."', '".$surname."', '".$year."')";
    $conn->exec($query);
    header("location: index.php");
}
?>