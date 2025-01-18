<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form එකෙන් ලබාගත් දත්ත ගන්න
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];

    // Data එක format කරන්න
    $data = "Name: $name | Age: $age | Phone: $phone\n";

    // data_1.txt එකට data append කරන්න
    $file = 'data_1.txt';

    if (file_put_contents($file, $data, FILE_APPEND)) {
        echo "Data saved successfully!";
    } else {
        echo "Failed to save data.";
    }
}
?>
