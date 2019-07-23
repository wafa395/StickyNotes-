<?php

// Start the session
session_start();
require 'config.php';
require "MyDb.php";

$note = new MyDb();



if(isset($_POST['first_name']) && isset($_POST['last_name'])){


$first_name =$_POST['first_name'];
$last_name=$_POST['last_name'];


$result=$note->add($first_name,$last_name);

 	header( "location: userform.php");


}

 else{
    
 	header( "location: index.php");
 }


// Set session variables
$_SESSION["first_name"] = $first_name;
$_SESSION["last_name"] = $last_name;

echo "Session variables are set.";

?>