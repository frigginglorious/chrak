<?php

// echo time();
$nextWeek = time() + (7 * 24 * 60 * 60);
// 7 days; 24 hours; 60 mins; 60 secs
$username = 'root';
$password = '';
$host = 'localhost';
// Create connection
$conn = new PDO("mysql:host=$host", $username, $password);
//$conn = new PDO("mysql:host=$host;dbname=myDB", $username, $password);
//$conn = new mysqli($host, $user, $password);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$sql = "select * from information_schema.tables";
$conn->query($sql);
//echo "Connected successfully";

//$sql = ""

print_r($conn);

$sql = 'SELECT * FROM fruit ORDER BY name';
foreach ($conn->query($sql) as $row) {
 print $row['name'] . "\t";
 print $row['color'] . "\t";
 print $row['calories'] . "\n";
}

echo 'Now:       '. date('m-d-h-i');
//$conn->close();
$conn = null;
?>
