<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favsubject"] = "Computer";
$_SESSION["favcar"] = "BMW";
echo "Session variables are set.";
?>

</body>
</html>