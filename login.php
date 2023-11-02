<?php
session_start();

// Retrieve user input from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "user_registration");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the username and password match
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["username"] = $username;
            header("Location: welcome.php");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Username not found.";
    }

    mysqli_close($conn);
}
?>
