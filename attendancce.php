<?php
// Connect to the database and retrieve attendance records
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM attendance";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["student_name"] . "</td>";
        echo "<td>" . $row["student_id"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["attendance_status"] . "</td>";
        echo "</tr>";
    }
}

$conn->close();
?>
