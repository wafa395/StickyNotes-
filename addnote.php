<?php

require 'config.php';
require "MyDb.php";

$note = new MyDb();



if(isset($_POST['first_name']) && isset($_POST['note'])){


$first_name =$_POST['first_name'];
$note=$_POST['note'];
 
 echo "nice" . $note ;

$result=$note->addnote($first_name,$note);



}

 else{
    
echo "ops";

 }

?>