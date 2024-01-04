<?php
// delete.php

$conn = mysqli_connect("localhost", "username", "password", "crud_example");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];
$query = "DELETE FROM users WHERE id='$id'";
$result = mysqli_query($conn, $query);

header("Location: index.php");
?>
