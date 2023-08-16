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
$query = "SELECT name, email FROM `web-database` WHERE id = $userID";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $userName = $row["name"];
    $userEmail = $row["email"];
} else {
    // User not found in the database
    // Handle this situation as needed
    $userName = "Unknown User";
    $userEmail = "unknown@example.com";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... your head content ... -->
</head>
<body>
    <h1>HALOOOOOOOOOO</h1>
    <p>Welcome, <?php echo $userName; ?></p>
    <p>Email: <?php echo $userEmail; ?></p>
    <a href="..\login\login.php">Logout</a>
</body>
</html>
