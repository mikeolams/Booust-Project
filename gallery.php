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
<body style="background-image: url(images/im/imagesback2.jpg); background-attachment: scroll; background-size:cover;  background-position: center; background-repeat: no-repeat;">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
  </ol>
</nav>
<section class ="galleryPage">
    <div class ="welcome">
      <h1>Welcome!</h1>
    <h6>You are in our gallery! View the available movie and you can make a request. Below this page is a request form for you!</h6>
  </div>
   <!-- php simple if and else statement  -->

<?php if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['state']) && isset($_POST['movieTitle'])):  ?>

<?php
    // IMPORT CLASS HERE
include "class/Request.php";

// EXECUTE WITH THE CUSTOM STATIC FUNCTION
Request::process($_POST);

?>

<div class="formBack" align="center">
  <h1>Thank you for making a request for your favourite movie!</h1>
  <p>An email has been sent to the email address you supplied.</p>
  <br>
  <a href="">Return to page</a>
</div>

<?php else:?>
  <main id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div>
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
      </ol>
      <div class="container">
  <!-- Content here -->
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/images (18).jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/images (11).jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/images (12).jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/images (13).jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/images (14).jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/images (15).jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/images (16).jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/images (17).jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/images (20).jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
    </div>
    <div class ="formBack"><h3>Requirements to make your request.</h3>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationTooltip01">First name</label>
                    <div id="status01" class ="form-text flag-error"></div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationTooltip02">Last name</label>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationTooltip02">Email address</label>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationTooltip03">City</label>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationTooltip04">State</label>
          <div id="status05" class ="form-text flag-error"></div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationTooltip05">Movie Title</label>
        </div>
      </div>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/g1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/g2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/g3.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/g4.jpg" alt="Fourth slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/g5.jpg" alt="Fifth slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/g6.jpg" alt="Sixth slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/g7.jpg" alt="Seventh slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/g8.jpg" alt="Eighth slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</section>
</main>
 
    <div class ="formBack"><h3>Make your request.</h3>
    <form action="gallery.php" method="POST" class="needs-validation">
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationTooltip01">First name</label>
          <input type="text"  name= "firstName" class="form-control" id="validationTooltip01" placeholder="First name" value="" required>
          <div id="status01" class ="form-text flag-error"></div>
          <div class="valid-tooltip">
            Looks good!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationTooltip02">Last name</label>
          <input type="text" name= "lastName" class="form-control" id="validationTooltip02" placeholder="Last name" value="" required>
          <div id="status02" class ="form-text flag-error"></div>
          <div class="valid-tooltip">
            Looks good!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationTooltip02">Email address</label>
          <input type="text" name= "email" class="form-control" id="validationTooltip03" placeholder="name@domain.com" value="" required>
          <div id="status03" class ="form-text flag-error"></div>
          <div class="valid-tooltip">
            Looks good!
          </div>
        </div>
    </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationTooltip03">City</label>
          <input type="text" class="form-control" id="validationTooltip04" placeholder="City" required>
          <div id="status04" class ="form-text flag-error"></div>
          <div class="invalid-tooltip">
            Please provide a valid city.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationTooltip04">State</label>
          <input type="text" name= "state" class="form-control" id="validationTooltip05" placeholder="State" required>
          <div class="invalid-tooltip">
            Please provide a valid state.
          </div>
          <div id="status05" class ="form-text flag-error"></div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationTooltip05">Movie Title</label>
          <input type="text" name= "movieTitle" class="form-control" id="validationTooltip06" value ="" placeholder="movieTitle" required>
          <div class="invalid-tooltip">
            Please provide a valid Movie title.
          </div>
        </div>
      </div>
      <button id="submitForm" class="btn btn-primary" type="submit">Submit form</button>
    </form>
    </div>

    <?php endif;?>

<script type="text/javascript" src = js/jquery.js></script>
<script type="text/javascript" src = js/bootstrap.js></script>
<script type="text/javascript">
  
 $(document).ready(function(){

  $("#submitForm").click (function(){ 
                  var firstName = $("#validationTooltip01").val();
                  var lastName = $("#validationTooltip02").val();
                  var email = $("#validationTooltip03").val();
                  var city = $("#validationTooltip04").val();
                  var state = $("#validationTooltip05").val();

            if (firstName===""){$("#status01").text("Please provide your first name");}
                else{$("#status01").text("looks good");}

            if (lastName===""){$("#status02").text("Please provide your last name");}
                else{$("#status02").text("looks good");}

            if (email!=""){$("#status03").text("");}
                else{$("#status03").text("Please provide your e-mail address");}

            if (city===""){$("#status04").text("Please provide your city name");}
                else{$("#status04").text("looks good");}

            if (state ===null){$("#status05").text("Please provide your state name");}
                else{$("#status05").text();}

                });

                 });

   
</script>

</body>
</html>