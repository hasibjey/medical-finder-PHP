<?php
include_once("./inc/conn.php");

/**
 * Admin table
 */
$sql = $conn->query("CREATE TABLE admins (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(191) NOT NULL,
email VARCHAR(191) NOT NULL,
password VARCHAR(191)
)");
if($sql) echo "Admin Table migrate successfully.<br>";
else echo "Admin table are not migrate.<br>";

$name = "Admin";
$email = "admin@gmail.com";
$password = password_hash('password', PASSWORD_DEFAULT);

$sql = $conn->query("INSERT INTO `admins` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')");


/**
 * category table
 */
$sql = $conn->query("CREATE TABLE categories (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
category VARCHAR(191) NOT NULL,
slug VARCHAR(191) NOT NULL,
status VARCHAR(191) NOT NULL DEFAULT '1'
)");
if($sql) echo "Category Table migrate successfully.<br>";
else echo "Category table are not migrate.<br>";
