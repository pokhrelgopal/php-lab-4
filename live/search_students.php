<?php
$servername = "localhost";
$username = "root";
$password = "user";
$dbname = "college_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["search_query"])) {
    $searchQuery = $_POST["search_query"];

    $sql = "SELECT * FROM students WHERE name LIKE '%$searchQuery%' OR address LIKE '%$searchQuery%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p><strong>Name:</strong> " . $row["name"] . "<br>";
            echo "<strong>Address:</strong> " . $row["address"] . "</p>";
        }
    } else {
        echo "<p>No matching records found.</p>";
    }
}

$conn->close();
