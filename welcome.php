<html>
<body>

Welcome <?php echo $_POST["fname"]; ?>!<br>
You are <?php echo $_POST["age"]; ?> years old.

<?php
echo "<br>";

$timestamp = time();
echo "The current date is: " . date("m/d/Y  g:i:s") . "<br>";

?>

</body>
</html> 

