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

 
       </style>
</head>




<body>


  <div class="container-fluid">

   <center><h1>Welcome aboard new user!</h1></center> </a>
     
    </div>




<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-12 ">
          <div class="panel panel-default">
            <div class="panel-body">
              <form role="form" action='add.php' method="post" >

                
             Please let me know your first name:



                <div class="row">

                  <div class="col-xs-6 col-sm-6 col-md-6">
                      <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name"  >
                    


                  </div>
                  

                  <br>
                  <br>

<div class="col-xs-6 col-sm-6 col-md-6" >

<?php
// Echo session variables that were set on previous page
echo "Great  " . $_SESSION["first_name"] ;

?>

</div>

                  <br>
                  <br>

                  <div class="col-xs-6 col-sm-6 col-md-6">
                    
                     Now please enter your last name:


                      <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name" >
                  </div>
                </div>
                                 <br>

                                Done!

                                 <br>

                                


<?php
// Echo session variables that were set on previous page
echo "Nice to meet you : " . $_SESSION["first_name"] ."  ". $_SESSION["last_name"] . ".";

?>






<!--
 
 // code to see if the user has a record 

<?php

 require 'MyDb.php';

 $note = new MyDb();

 $users = $note->getname();

 
 foreach ($users as $user) {
  
  if ($user['first_name'] == $_SESSION["first_name"]) {

  echo "found"; 

  }

 

 }

?>
-->

                                 <br>
                                 <br>


                       <input type="submit" name="submit" value="register"  >

                       <button> <a href="index.php"> Go Back</button>


                       


                </div>
                

                

               


                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>