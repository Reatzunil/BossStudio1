<?php 

require_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare an INSERT statement
    $stmt = $pdo->prepare("INSERT INTO reservation_requests (name, email, subject, availability, photographer_id, message) VALUES (:name, :email, :subject, :availability, :photographer_id, :message)");

    // Bind parameters
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':subject', $_POST['subject']);
    $stmt->bindParam(':availability', $_POST['availability']);
    $stmt->bindParam(':photographer_id', $_POST['photographers']);
    $stmt->bindParam(':message', $_POST['message']);

    // Execute the statement
    try {
        $stmt->execute();
        // Redirect to a new page on successful submission
        header("Location: index.php");
        exit; // Make sure to exit after redirection
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
