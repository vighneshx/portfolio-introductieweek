<!-- PHP -->

<?php
// Database connection parameters
$servername = "localhost";
$username = "VighneshAI";
$password = "Monniksgier94";
$dbname = "PortfolioAI";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// SQL query to insert data into the database
$sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";
$conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "Form data submitted successfully to the Database!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
