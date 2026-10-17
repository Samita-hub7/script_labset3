<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_pkmc_web_2081_b";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_REQUEST['username']) || empty($_REQUEST['username'])) {
    echo "";
    exit;
}

$username = $_REQUEST['username'];

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<span style='color:green'>Username available</span>";
} else {
    echo "<span style='color:red'>Username not available</span>";
}

$conn->close();
?>