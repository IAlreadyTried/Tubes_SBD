<?php 
session_start();
$tambahan = $_GET['awal'];
$nama = $_SESSION['username'];
$conn = mysqli_connect('localhost', 'root', '', 'moovit_database');
$querynya = ("UPDATE penggunas SET awal= '$tambahan' WHERE username='$nama'");
mysqli_query($conn, $querynya);

?>