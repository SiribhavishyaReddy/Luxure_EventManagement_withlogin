<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'test_db';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Insert data into database
$sql = "INSERT INTO mytable (name, email, mobile, subject, message) VALUES ('$name', '$email', '$mobile', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Sent successfully!";
} else {
    echo "Error: ". $sql. "<br>". $conn->error;
}

// Close connection
$conn->close();
?>

<!-- HTML form -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="mobile">Mobile:</label>
    <input type="tel" id="mobile" name="mobile"><br><br>
    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject"><br><br>
    <label for="message">Message:</label>
    <textarea id="message" name="message"></textarea><br><br>
    <input type="submit" value="Send">
</form>