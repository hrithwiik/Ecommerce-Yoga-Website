<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "yoga"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO usercomment (user,email,message) VALUES (?, ?, ?)");
$stmt->bind_param("sss",$name,$email,$message);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$stmt->execute();

echo '<script>
alert("Form  Succesfully submited");
window.location.href="index.html";
</script>';
// Close statement and connection
$stmt->close();
$conn->close();
?>
