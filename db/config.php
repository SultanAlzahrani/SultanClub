<?php
$host = "sql112.infinityfree.com";  // replace with the actual host from your control panel
$user = "if0_38729194";     // from MySQL sectionm
$password = "vMCH4jlg1S51k"; // your MySQL password
$dbname = "if0_38729194_my_Database";    // usually something like u123456789_yoursite

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
