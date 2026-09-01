<!DOCTYPE html> 
<html> 
<body> 
<form method="post"> 
<label>Paragraph:</label><br> 
<textarea name="paragraph" rows="6" cols="60" required></textarea><br><br> 
<label>Search Word:</label> 
<input type="text" name="word" required> 
<input type="submit" value="Search">
 </form>
  <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { $paragraph = $_POST["paragraph"]; 
  $word = trim($_POST["word"]); 
  if ($word === "") { 
echo "Please enter a search word."; 
} else { 
$count = substr_count(strtolower($paragraph), strtolower($word)); echo "The word '" . htmlspecialchars($word) . "' occurs " . $count . " time(s)."; 
} 
} 
?> 
</body> 
</html>