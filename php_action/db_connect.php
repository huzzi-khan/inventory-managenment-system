<?php
$connect = new mysqli(
    'localhost',  // Host
    'root',       // Username (XAMPP default)
    '',           // Password (blank for XAMPP)
    'inventory_db' // Your database name
);

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}