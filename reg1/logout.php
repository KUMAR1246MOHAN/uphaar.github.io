<?php
session_start();

// Clear session data
session_unset();
session_destroy();

header("Location: index.php");
exit;
?>
