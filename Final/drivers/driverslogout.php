
<?php
// Initialize the session.
session_start();
// Unset all of the session variables.

// Finally, destroy the session.    
session_destroy();

// Include URL for Login page to login again.
header("Location: login.html");
exit;
?>