<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form එකේ Values ගන්න
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];

    // Data File එකට දත්ත Save කරන්න
    $file = "data_1.txt";
    $data = "Name: $name | Age: $age | Phone: $phone\n";

    // Append කරන්න
    if (file_put_contents($file, $data, FILE_APPEND)) {
        echo "Data saved successfully!";
    } else {
        echo "Error saving data.";
    }
}
?>
