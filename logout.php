<?php
session_start();
session_destroy();
header("Location: MAS7.html"); // Redirect to the homepage
exit();
?>
