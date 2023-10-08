<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    // Check if the email exists in your database (you should implement this)
    if (userWithEmailExists($email)) {
        // Generate a random token (you should implement this)
        $token = generateRandomToken();
        
        // Store the token in your database for the user (you should implement this)
        storeTokenForUser($email, $token);
        
        // Send the reset email
        sendResetEmail($email, $token);
        
        // Redirect the user to a confirmation page
        header("Location: reset-email-sent.php");
        exit();
    } else {
        // Email doesn't exist in the database, show an error message
        $error = "Email not found in our records.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>
    <h1>Forgot Password</h1>
    <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post" action="send-password-reset.php">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <button type="submit">Send Reset Email</button>
    </form>
</body>
</html>
