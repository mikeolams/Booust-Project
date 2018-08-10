<?php

// Start the session

session_start();

//include database connection
include 'config/database.php';

if( isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['userName']) && isset($_POST['password'])) {

try{
  //inser all data
  $query = "INSERT INTO users SET firstName=:firstName, lastName=:lastName, userName=:userName, password=:password, created_at=:created_at";
  //prepare for execution
  $stmt = $connection->prepare($query);

   //post parameters
  $firstName= $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $userName = $_POST['userName'];
  $password = $_POST['password'];
  $date = date("Y-m-d H:i:s");
 

  //bind the parameters
  $stmt->bindParam(':firstName',$userName);
  $stmt->bindParam(':lastName',$userName);
  $stmt->bindParam(':userName',$userName);
  $stmt->bindParam(':password', $password);
  $stmt->bindParam(':created_at', $date);

  //execute query
  if ($stmt->execute()){
    $_SESSION['firstName'] =$firstName;
  header("location:test.php");
  exit();

  }
 
 else {
  echo "<div class = 'alert alert-danger'>Unable to save record.</div>";
}
}
// show error
catch(PDOException $exception){
  die('ERROR: ' . $exception->getMessage());
}
}

?>


<!DOCTYPE html>
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
    <li class="breadcrumb-item active" aria-current="page">Register</li>
  </ol>
</nav>
<div id= contact class="container">
	<h2 align="center"> We are glad to add you to our users!</h2>
</div>


      <section class = "form"> 
      <div class="modal-body">
        <form action="register.php" method="POST">
          <div class="form-group">
            <label for="validationTooltip04" ></label>
            <input type="text" hidden class="form-control" value="info@flamefilmes.com" id="recipient-name" required>
              <div id ="messageR"></div>
          </div>
          <div class="form-group">
            <p align="center"> Please fill this form to register.</p>
            <label for="name" class="col-form-label">First Name:</label>
            <input type="text" class="form-control" name="firstName" placeholder="e.g Philips" id="userName" required>
             <!-- <div id ="messageY"></div> -->
          </div>
          <div class="form-group">
            <label for="name" class="col-form-label">Last Name:</label>
            <input type="text" class="form-control" name="lastName" placeholder="e.g Sodiq" id="userName" required>
             <!-- <div id ="messageY"></div> -->
          </div>
          <div class="form-group">
            <label for="name" class="col-form-label">Your Email:</label>
            <input type="text" class="form-control" name="userName" placeholder="something@yourdomain" id="userName" required>
             <!-- <div id ="messageY"></div> -->
          </div>
          <div class="form-group">
            <label for="your-email" class="col-form-label">Your password:</label>
            <input type="text" class="form-control" name="password" placeholder="password" id="password" required>
             <div id ="messageY"></div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" data-dismiss="modal" value = "submit">Submit</button>
            <button type="reset" id ="reset" class="btn btn-secondary">Reset</button>
            <p>Yes, I have an account ? <a href="login.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Login</a></p>
          </div>
        </form>
    </div>
    </section>
<script type="text/javascript" src = js/jquery.js></script>
<script type="text/javascript" src = js/bootstrap.js></script>

</body>
</html>