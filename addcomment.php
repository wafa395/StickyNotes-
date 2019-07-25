<?php

require 'config.php';
require "MyDb.php";

$note = new MyDb();



if(isset($_POST['comment'])){


$comment=$_POST['comment'];
 



$result=$note->addcomment($comment);

 	header( "location: index.php");


}

 else{
    
echo "ops";

 }

?>