<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate form data (you may add more validation as needed)
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        // Handle empty fields
        echo "Please fill in all fields.";
    } elseif ($password != $confirm_password) {
        // Handle password mismatch
        echo "Passwords do not match.";
    } else {
        // If all validations pass, you can proceed with registration process
        // For demonstration purposes, we'll just display the submitted data
        echo "Registration successful!<br>";
        echo "Username: " . $username . "<br>";
        echo "Email: " . $email . "<br>";
        // You may perform further actions here, such as storing the data in a database
    }
} else {
    // Handle if form is not submitted
    echo "Form not submitted.";
}
?>
