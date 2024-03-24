<?php
include('connection.php');

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Insert data into the database
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Set session variable for success message
        session_start();
        $_SESSION['success_message'] = "Your message has been received successfully. Thank you!";
        // Redirect to avoid resubmission on page refresh
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        // Handle error here, if needed
    }

    // Close the database connection
    $conn->close();
}
