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


/**
 * blood group table
 */
$sql = $conn->query("CREATE TABLE bloods (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  blood VARCHAR(191) NOT NULL
  )");
  if($sql) echo "Blood group Table migrate successfully.<br>";
  else echo "Blood group table are not migrate.<br>";
  