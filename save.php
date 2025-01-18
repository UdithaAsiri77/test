<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];

    $file = 'data.csv';

    // Add headers if the file doesn't exist
    if (!file_exists($file)) {
        file_put_contents($file, "Name,Age,Phone,City\n", FILE_APPEND);
    }

    // Write data to the file
    $data = "$name,$age,$phone,$city\n";
    file_put_contents($file, $data, FILE_APPEND);

    echo "Data saved successfully!";
} else {
    echo "Invalid request method.";
}
?>
