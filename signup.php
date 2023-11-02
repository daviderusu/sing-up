<?php
// Retrieve user input from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repeatpassword = $_POST["repeatpassword"];

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "user_registration");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    else if ($password !=$repeatpassword) {
        echo "<script type='text/javascript'>alert('The two passwords do not match!!');
                window.location='signup.php';</script>";

    } 

    // Check if the username already exists
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "<script type='text/javascript'>alert('Username already exists!!');
                window.location='signup.php';</script>";
    } else {
        // Insert new user into the database
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $query = "INSERT INTO users (firstname, lastname, email, username, password) VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";
        if (mysqli_query($conn, $query)) {
            echo "<script type='text/javascript'>alert('Sign up successful, you can now log in!!');
                window.location='loginform.php';</script>";            
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>
