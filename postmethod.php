<?php
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

echo "<h2>Thank you for your feedback, $name!</h2>";
echo "<p>We received the following feedback from you:</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Feedback:</strong> $feedback</p>";
?>