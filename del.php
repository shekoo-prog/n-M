<?php
include 'config.php';

$id = $_GET['id'];
$rows = mysqli_query($conn, "SELECT * FROM `catog` WHERE id=$id");
$row = mysqli_fetch_array($rows);
unlink($row['image']);
mysqli_query($conn, "DELETE FROM `catog` WHERE id=$id");
    
header("location:admain.php");

?>