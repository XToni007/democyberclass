<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: ../login/login.php");
    exit();
}

$userID = $_GET["id"]; // Get the user ID from the URL parameter

$servername = "localhost";
$username = "root";
$password = "";
$db_name="demo-cyberclass";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Query the database to get the user's information based on the ID
$query = "SELECT name,email,password FROM `web-database` WHERE id = $userID";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $name = $row["name"];
    $email = $row["email"];
    $password = $row["password"];
    echo "Welcome, $name";
    echo "<br>";

} else {
    // User not found in the database
    // Handle this situation as needed
    echo "USER NOT FOUND";

}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... your head content ... -->
</head>
<body>
    <br>
    <a href="..\login\login.php">Logout</a>
</body>
</html>
