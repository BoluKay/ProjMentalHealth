<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy all session data
header("Location: index.php"); // Redirect to login page
exit();
?>
