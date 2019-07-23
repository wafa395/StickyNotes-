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

   <center><h1>Retrieve your notes? Absolutely! </h1></center> </a>
     
    </div>




<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-12 ">
          <div class="panel panel-default">
            <div class="panel-body">
              <form role="form">

                


                  <div class="col-xs-6 col-sm-6 col-md-6">

                       Please let me know your first name:

                      <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" required >
                    </div>
<br><br>

                  
                  

                  <br>
                  <br>
                
              </form>


              <div class="col-md-2 col-sm-6 hero-feature">
                  <div class="thumbnail">
                    <div class="caption">
                      
            

                        your note : 


<?php

 require 'MyDb.php';

 $note = new MyDb();

 $comments = $note->getN();


 ?>

 <table border='1'>
 <hr><th>id</th><th>Name</th><th>note</th><th>data</th></tr>
 
 <?php

 foreach ($comments as $comment) {

  if ($comment['first_name'] == $_SESSION["first_name"]) {

  
  echo "<tr>";
  echo "<td>" . $comment['id'] . "</td>";
  echo "<td>" . $comment['first_name'] . "</td>";
  echo "<td>" . $comment['comment'] . "</td>";
  echo "<td>" . $comment['date'] . "</td>";
  echo "</tr>";

 }
}
?>

</table>


                      
                    </div>
                </div>
                </div>



</table>

<button onclick="goBack()">Go Back</button>


<script>
function goBack() {
  window.history.back();
}
</script>

            </div>

            


          </div>

        </div>
      </div>
    </div>


</body>
</html>