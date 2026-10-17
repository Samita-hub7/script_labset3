<?php
$country = $_GET['country'] ?? '';  // this fixes the Warning

$cities = array(
    "Nepal" => array("Kathmandu", "Pokhara", "Lalitpur"),
    "India" => array("Delhi", "Mumbai", "Kolkata"),
    "China" => array("Beijing", "Shanghai", "Guangzhou")
);

if (isset($cities[$country])) {
    foreach ($cities[$country] as $city) {
        echo "<option value='$city'>$city</option>";
    }
} else {
    echo "<option value=''>Select City</option>";
}
?>
?>