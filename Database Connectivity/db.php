<!-- Connecting to MySQL Database: -->
<!-- PHP provides several methods for connecting 
to a MySQL database. One common method is using the 
mysqli (MySQL Improved) extension or PDO (PHP Data Objects). -->


<?php
// Using MySQLi Extension
$servername = "localhost";
$username = "username";
$password = "password";
$database = "dbname";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>

<?php
// Using PDO:
$dsn = "mysql:host=localhost;dbname=dbname";
$username = "username";
$password = "password";

try {
    $conn = new PDO($dsn, $username, $password);
    echo "Connected successfully";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>


<!-- Performing Database Operations: -->
<!-- Once connected, you can perform various operations on the database 
such as inserting, updating, deleting, and fetching records. -->
<!-- Inserting Records: -->
<?php
$sql = "INSERT INTO users (username, email) VALUES ('john', 'john@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>


<!-- Updating Records -->
<?php
$sql = "UPDATE users SET email='john.doe@example.com' WHERE username='john'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

<!-- Deleting Records: -->
<?php
$sql = "DELETE FROM users WHERE username='john'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>


<!-- Fetching Records: -->
<?php
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Username: " . $row["username"] . ", Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}
?>

<!-- Closing Database Connection: -->
<!-- After performing database operations, it's essential to close the database connection to free up resources. -->

<?php
$conn->close();
?>

<!-- Transactions and Error Handling: -->
<!-- PHP provides support for transactions to ensure data integrity and error handling mechanisms to handle database errors gracefully. -->
<?php
$conn->begin_transaction();
// Perform multiple SQL operations
$conn->commit(); // Commit transaction

// Handle errors
if ($conn->error) {
    $conn->rollback(); // Rollback transaction
    die("Error: " . $conn->error);
}
?>


