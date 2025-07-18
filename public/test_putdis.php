<?php
    require_once('../private/initialize.php');
    require_once(SHARED_PATH.'/header.php');
?>

<?php

// Define your database connection parameters
$hostname = 'localhost'; // Replace with your database host
$username = 'aditya'; // Replace with your database username
$password = 'adityapatil'; // Replace with your database password
$database = 'ayuracharya'; // Replace with your database name

// Create a MySQLi connection
$mysqli = new mysqli($hostname, $username, $password, $database);

// Check if the connection was successful
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Define a function to find diseases by symptoms

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input symptom names from the form
    $input_symptoms = $_POST["symptoms"];

    // Call the find_disease function to get the results
    find_disease($mysqli, $input_symptoms);

    // Close the MySQLi connection
    $mysqli->close();
}
?>
<?php
    require_once(SHARED_PATH.'/footer.php');
?>