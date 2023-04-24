<?php
// Replace the placeholders below with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cv";

try {
  // Create a new PDO instance
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  // Set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "Connected successfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM cv";
$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($result) > 0) {
  // output data of each row
  foreach ($result as $row) {
    // Do something with each row
  }
}
