<?php 
require_once 'php_action/core.php';

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

// redirect to login page
header('Location: http://localhost/inventory/index.php');
exit;
?>
