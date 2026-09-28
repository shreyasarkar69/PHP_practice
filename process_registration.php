<?php

// Extract form data
$username = $_POST['username'] ?? '';
$emailaddress = $_POST['emailaddress'] ?? '';
$gender = $_POST['gender'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$country = $_POST['country'] ?? '';
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';
$terms = $_POST['terms'] ?? '';

// Check whether passwords match
if ($password !== $confirm_password) {
    die("Error: Password and Confirm Password do not match.");
}

// Display registration data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Details</title>
</head>

<body>

<h2>Registration Details</h2>

<p><strong>Username:</strong>
    <?php echo htmlspecialchars($username); ?>
</p>

<p><strong>Email Address:</strong>
    <?php echo htmlspecialchars($emailaddress); ?>
</p>

<p><strong>Gender:</strong>
    <?php echo htmlspecialchars($gender); ?>
</p>

<p><strong>Mobile No.:</strong>
    <?php echo htmlspecialchars($mobile); ?>
</p>

<p><strong>Country:</strong>
    <?php echo htmlspecialchars($country); ?>
</p>

<p><strong>Password:</strong>
    <?php echo htmlspecialchars($password); ?>
</p>

<p><strong>Confirm Password:</strong>
    <?php echo htmlspecialchars($confirm_password); ?>
</p>

<p><strong>Terms and Conditions:</strong>
    <?php echo htmlspecialchars($terms); ?>
</p>

<h3>Registration Successful!</h3>

</body>
</html>
