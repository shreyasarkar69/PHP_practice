<!DOCTYPE html> 
<html> 
<body> 
<h2>User Registration</h2> 
<form method="post">
Full Name: 
 <input type="text" name="fullname" required><br><br> 
Date of Birth: 
<input type="date" name="dob" required><br><br> 
Email ID: 
<input type="email" name="email" required><br><br> 
Mobile:
<input type="text" name="mobile" maxlength="10" required><br><br> 
<label> 
<input type="checkbox" name="terms"> 
I agree to the terms and conditions 
</label><br><br> 
<input type="submit" value="Register"> 
</form> 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { $fullname = trim($_POST["fullname"]); 
$dob = $_POST["dob"]; 
$email = trim($_POST["email"]); 
$mobile = trim($_POST["mobile"]); 
$terms = isset($_POST["terms"]); 
$errors = []; 
// Full name must contain at least two words. 
if (count(preg_split('/\s+/', $fullname)) < 2) { 
    
$errors[] = "Full name must contain at least two words."; 
} 
// User must be at least 18 years old. 
if ($dob === "") { $errors[] = "Date of birth is required."; 
} else { 
try { 
$birthDate = new DateTime($dob); 
$today = new DateTime(); 
$age = $today->diff($birthDate)->y; 
if ($birthDate > $today || $age < 18) { 
    $errors[] = "User must be at least 18 years old."; 
    }
 } catch (Exception $e) { $errors[] = "Invalid date of birth."; 
 }
 } 
 // Validate email. 
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
    $errors[] = "Please enter a valid email address."; 
    } 
    // Mobile must contain exactly 10 digits. 
if (!preg_match('/^\d{10}$/', $mobile)) { $errors[] = "Mobile number must be exactly 10 digits."; 
}
 // Terms must be accepted.
if (!$terms) { $errors[] = "You must agree to the terms and conditions."; 
} 
if (empty($errors)) { echo "<p style='color:green;'>Successful registration</p>";
 } else { 
    echo "<ul style='color:red;'>"; 
    foreach ($errors as $error) { echo "<li>" . htmlspecialchars($error) . "</li>"; } echo "</ul>"; 
} 
} 
?> 
</body> 
</html>