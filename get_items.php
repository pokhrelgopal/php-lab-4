<?php
// Replace with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "user";
$dbname = "testing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch items based on the selected value from the dropdown
if (isset($_POST['item_id'])) {
    $itemId = $_POST['item_id'];
    $sql = "SELECT * FROM items WHERE id = $itemId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "ID: " . $row['id'] . "<br>";
        echo "Item Name: " . $row['item_name'];
    } else {
        echo "No item found with ID: $itemId";
    }
}

$conn->close();
