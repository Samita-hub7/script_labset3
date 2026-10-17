<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userid = $_POST["userid"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($userid == "admin" && $password == "12345") {
        echo "success";
    } else {
        echo "error";
    }

} else {
    echo "Please submit the login form.";
}
?>