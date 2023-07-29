<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_movements";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "select * from movements order by id desc";

$result = $conn->query($query);

if ($result) {
    $row = $result->fetch_assoc();

    if ($row) {
        $column2 = $row['directions'];

        // Display the data
        echo "Last movement: $column2";
    } else {
        echo "no movements";
    }
} else {
    echo "Error executing the query: " . $conn->error;
}

$conn->close();
?>