<?php

// define('BASE_PATH', realpath(dirname(__FILE__)));

   $dbhost = "localhost";
   $dbuser = "root";
   $dbpassword = "";
   $dbname = "project";

   try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpassword);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    // echo "Connected to $dbname at $dbhost successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
  
