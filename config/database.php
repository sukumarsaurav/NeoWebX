<?php
// Prevent direct access to this file
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

// Database connection parameters
$db_host = "localhost";
$db_name = "u911550082_startupai";
$db_user = "u911550082_startupai";
$db_pass = "r9[T!LCxpD";

try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("set names utf8");
} catch(PDOException $e) {
    error_log("Database Connection Error: " . $e->getMessage());
    // Don't show error details in production
    exit("Database connection error. Please try again later or contact support.");
}
?> 