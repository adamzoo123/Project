<?php


// if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
// $url = "https://";   
// else  
// $url = "http://";   

// $url.= $_SERVER['HTTP_HOST'];   

// $url.= $_SERVER['REQUEST_URI'];    



   $dbhost = "localhost";
   $dbuser = "root";
   $dbpassword = "passwor";
   $dbname = "employee";

   try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpassword);
    //echo "Connected to $dbname at $dbhost successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
  
