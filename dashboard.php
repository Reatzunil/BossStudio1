<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admin Page</h1>

    <h2>Reservation Requests</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Availability</th>
            <th>Photographer</th>
            <th>Message</th>
        </tr>
        <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $availability = $_POST['availability'];
            $photographer = $_POST['photographers'];
            $message = $_POST['message'];

            // Display form data
            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$email</td>";
            echo "<td>$subject</td>";
            echo "<td>$availability</td>";
            echo "<td>$photographer</td>";
            echo "<td>$message</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>