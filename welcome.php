<html>
<body>

Welcome <?php echo $_POST["fname"]; ?>!<br>
You are <?php echo $_POST["age"]; ?> years old.

<?php
echo "<br>";

date_default_timezone_set();
$timestamp = localtime();
echo "The current date is: " . date("m/d/Y  h:i:s A") . "<br>";

?>

</body>
</html> 

