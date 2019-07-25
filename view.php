<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">

  <style type="text/css">

    body{
    background-color: #D1D0CE;
}

.centered-form{
  margin-top: 60px;
}

.centered-form .panel{
  background: rgba(255, 255, 255, 0.8);
  box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}

 .sticky {

  right: 0;
  z-index: 150;
  transform: rotate(5deg);
  width: 200px;
  min-height: 150px;
  margin: -10px 10px 10px;
  padding: 10px;
  font-family: "Comic Sans MS", "Comic Sans", "Chalkboard SE", "Comic Neue", cursive;
  font-size: 14px;
  color: #000;
  background: #FFC0CB;
  box-shadow: -2px 2px 2px rgba(0,0,0,0.3);
  float: left;
}

.sticky:before, .sticky:after {
  content: "";
  display: block;
  position: absolute;
  width: 16px;
  height: 16px;
  top: 0;
  right: 0;
}
.sticky:before {
  border-top: solid 8px #fff;
  border-right: solid 8px #fff;
  border-left: solid 8px transparent;
  border-bottom: solid 8px transparent;
}
.sticky:after {
  border-bottom: solid 8px #dddd33;
  border-left: solid 8px #dddd33;
  border-right: solid 8px transparent;
  border-top: solid 8px transparent;
}
  </style>
</head>




<body>


  <div class="container-fluid">

   <center><h1>Retrieve your notes? Absolutely! </h1></center> </a>
     
    </div>




<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-12 ">
          <div class="panel panel-default">
            <div class="panel-body">
              <form role="form">

             
  <?php
// Echo session variables that were set on previous page
echo "<b> your note : </b> " . $_SESSION["first_name"] ."  ". $_SESSION["last_name"] . ".";

?>
  
                         


                        <br>
                        <br>
                        <br>


<?php

 require 'MyDb.php';

 $note = new MyDb();

 $comments = $note->getN();



 foreach ($comments as $comment) {

 if ($comment['first_name'] == $_SESSION["first_name"]) {
  

  echo '<div class = sticky >';
  echo "<b> Date :</b>"  . $comment['date'] . "<br>"  ; 
  echo " <b> Note : </b> "  . $comment['comment'];
  echo '</div>';
  echo '<br>';
  echo '<br>';
  echo '<br>';



 }
}
?>


                        
 
                  <br>
                  <br>
 
                   <button ><a href="index.php" > Go Back </a> </button>

 
       </form>
       </div>
       </div>
       </div>
       </div>
       </div>




</body>
</html>