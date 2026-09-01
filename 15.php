<!DOCTYPE html> 
<html> 
<body> 
<form method="post"> 
Enter Marks: <input type="number" name="marks" min="0" max="1000" required> 
<input type="submit" value="Calculate"> 
</form> 
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { $marks = (int)$_POST["marks"]; 
if ($marks > 800 && $marks <= 1000) { echo "Print"; 
} elseif ($marks > 600 && $marks <= 800) { 
echo "Class II"; 
} elseif ($marks > 400 && $marks <= 600) { 
echo "Class III"; 
} elseif ($marks >= 0 && $marks <= 400) { 
echo "Fail"; 
} else { 
echo "Invalid marks."; 
} 
}
?> 
</body> 
</html>