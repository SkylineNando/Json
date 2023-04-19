<?php
// MySQL database settings
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Connect to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
   die("Failed to connect to database: " . $conn->connect_error);
}

// Load the JSON file
$json = file_get_contents("data.json");

// Decode JSON into an associative array
$data = json_decode($json, true);

// Loop through the associative array and insert the data into the "example" table
foreach($data as $item) {
   $sql = "INSERT INTO example (field1, field2, field3) VALUES ('".$item['field1']."', '".$item['field2']."', '".$item[ 'field3']."')";

   if ($conn->query($sql) === TRUE) {
     echo "Data inserted successfully!";
   } else {
     echo "Error inserting data: " . $conn->error;
   }
}

// Close the connection to the MySQL database
$conn->close();
?>
