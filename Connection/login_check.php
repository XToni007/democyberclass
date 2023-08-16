<?php
// ... your database connection and other code ...
include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // // Hash the password before comparing it to the stored hashed password in the database
    // $hashedPassword = hash('sha256', $password);

    // Query the database to check if the email and hashed password match
    $query = "SELECT id, name, email FROM `web-database` WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["user_name"] = $row["name"];
        $_SESSION["user_email"] = $row["email"]; // Set the user's email in the session
        header("Location: ../Index/index.php?id=" . $row["id"]);
        exit();
    } else {
        echo "Invalid login credentials";
    }

    $conn->close();
}
?>
