<!DOCTYPE html> 
<html> 
<body> 
<form method="post"> 
Enter Radius: <input type="number" name="radius" step="any" min="0" required> 
<input type="submit" value="Calculate"> 
</form> 
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { $radius = (float)$_POST["radius"]; 
$circumference = 2 * pi() * $radius; $area = pi() * $radius * $radius; 
echo "Circumference: " . $circumference . "<br>"; 
echo "Area: " . $area; 
} 
?> 
</body>
 </html>