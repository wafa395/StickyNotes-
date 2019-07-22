<?php

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

?>