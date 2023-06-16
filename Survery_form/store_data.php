<?php
$data = $_POST;

// Convert the data to JSON format
$jsonData = json_encode($data);

// Store the data in a text file
file_put_contents('data.txt', $jsonData);

// Display a thank you message
echo "Thank you! Your data has been saved.";
?>
