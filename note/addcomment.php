<?php

require 'config.php';
require "MyDb.php";

$note = new MyDb();



if(isset($_POST['first_name']) && isset($_POST['comment'])){


$first_name =$_POST['first_name'];
$comment=$_POST['comment'];
 



$result=$note->addcomment($first_name,$comment);

 	header( "location: index.php");


}

 else{
    
echo "ops";

 }

?>