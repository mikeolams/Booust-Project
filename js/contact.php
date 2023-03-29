<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton"> -->
    <title>film rental business site</title>
    <link rel="stylesheet" href="css/index.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <style type="text/css"></style>

     <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
  </ol>
</nav>
<div id= contact class="container">
	<h5>Hello! You may reach us as on any of the following details.</h5>
  <button id="showAddr" type="button" class="btn btn-primary btn-sm">Show Address</button>
  <button id="hideAddr" type="button" class="btn btn-primary btn-sm">Hide Address</button>
  <ul class ="address">
  	<span><strong>Contact Address</strong></span>
  	<li class="noFormat" style="list-style-type:none;">Special Road theater, Block 5 Suite 6</li>
  	<li  class="noFormat" style="list-style-type:none;">Ipaja,</li>
  	<li class="noFormat" style="list-style-type:none;">Lagos, Nigeria.</li>
  	<li class="noFormat" style="list-style-type:none;"><em><strong>Tel</strong></em>: 01837298 or <em><strong>GSM:</strong></em> 08056971023; 087900098</li>
  </ul>
  <p><span><strong>OR</strong></span></p>
  <ul class ="address">
  	<span><strong>Social Media Address</strong></span>
  	<li class="noFormat" style="list-style-type:none;"><a href="https://twitter.com/mikeAndela_Nigeria">@twitter</a></li>
  	<li  class="noFormat" style="list-style-type:none;"><a href="https://facebook.com/mikeAndela_Nigeria">@facebook</a></li>
  	<li class="noFormat" style="list-style-type:none;"><a href="https://linkedin.com/Andela_Nigeria">@linkedin</a></li>
  </ul>

  <p><span><strong>OR</strong></span></p>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Send us an email</button>
</div>

<!-- php simple if and else statement  -->

<?php if (isset($_POST['name']) && isset($_POST['your-email']) && isset($_POST['message-text'])):  ?>

<?php
    // IMPORT CLASS HERE
include "class/SendUsEmail.php";

// EXECUTE WITH THE CUSTOM STATIC FUNCTION
SendUsEmail::processone($_POST);

?>

<?php else:?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="info.php" method="POST">
          <div class="form-group">
            <label for="validationTooltip04" ></label>
            <input type="text" hidden class="form-control" value="info@flamefilmes.com" id="recipient-name" required>
              <div id ="messageR"></div>
          </div>
          <div class="form-group">
            <label for="name" class="col-form-label">Your Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Full Name" id="name" required>
             <!-- <div id ="messageY"></div> -->
          </div>
          <div class="form-group">
            <label for="your-email" class="col-form-label">Your email:</label>
            <input type="text" class="form-control" name="your-email" placeholder="something@yourdomain" id="your-email" required>
             <div id ="messageY"></div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" name="message-text" id="message-text" placeholder="Your message.." required></textarea>
          </div>
          <div class="modal-footer">
            <!-- <input type="submit" value ="Submit"> -->
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" id ="sendButton" class="btn btn-primary">Send message<!-- <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"></a> --></button>
          </div>
        </form>
    </div>
  </div>

<?php endif;?>

<script type="text/javascript" src = js/jquery.js></script>
<script type="text/javascript" src = js/bootstrap.js></script>
<script type="text/javascript">
  //hid and show button
    $("#hideAddr").click (function(){ $(".address").hide();}); 
    $("#showAddr").click (function(){ $(".address").show();});

//send mail validation test function  
  $(document).ready(function() {
    // body...
   $("#sendButton").click (function(event){ 
                 
                  var yourEmail = $("#validationTooltip03").val();
                  var ourEmail = $("#validationTooltip04").val();

            if (yourEmail===""){$("#messageY").text("Please youe are required to provide a valid email");}
                else{$("#messageY").text();}

            if (ourEmail===ourEmail){$("#messageR").text();}
                else{$("#messageR").text("Please don't alter this e-mail address");}

                });
});

//   $(document).ready(function(){
//     $("a").click(function(event){
//         event.preventDefault();
//         alert("Was preventDefault() called: " + event.isDefaultPrevented());
//     });
// });

</script>


</body>
</html>