<?php

// Start the session

session_start();
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
    <li class="breadcrumb-item active" aria-current="page">Login</li>
  </ol>
</nav>
<?php
//include database connection
include 'config/database.php';

if( isset($_POST['userName']) && isset($_POST['password'])) {

try{
  //select all data
  $query = "SELECT firstName FROM users WHERE userName=:userName AND password=:password";
  $stmt = $connection->prepare($query);

  //bind the parameters
  $userName = $_POST['userName'];
  // $password = hash("sha256", $_POST['password']);
  $password = $_POST['password'];
  $stmt->bindParam(':userName',$userName);
  $stmt->bindParam(':password',$password);
  $stmt->execute();

  // this is how to get number of rows returned
  $num = $stmt->rowCount();
if($num>0){
  $row =$stmt->fetch();
  $_SESSION['firstName'] =$row['firstName'];
  header("location:test.php");
  exit();
}

}
// show error
catch(PDOException $exception){
  die('ERROR: ' . $exception->getMessage());
}
} else {
  session_destroy();
}

?>

<div id= contact class="container">
	<h2 align="center"> You are require to login with your details!</h2>
</div>


      <section class = "form"> 
      <div class="modal-body">
        <form action="login.php" method="POST">
          <div class="form-group">
            <label for="validationTooltip04" ></label>
            <input type="text" hidden class="form-control" value="info@flamefilmes.com" id="recipient-name" required>
              <div id ="messageR"></div>
          </div>
          <div class="form-group">
            <p>Please login here.</p>
            <label for="name" class="col-form-label">User Name:</label>
            <input type="email" class="form-control" name="userName" placeholder="something@yourdomain" id="userName" required>
             <!-- <div id ="messageY"></div> -->
          </div>
          <div class="form-group">
            <label for="your-email" class="col-form-label">Your password:</label>
            <input type="password" class="form-control" name="password" placeholder="password" id="password" required>
             <div id ="messageY"></div>
          </div>
          <div class="form-group">
            <input type="radio" value="Remember" id="password" >Remember my password
            <div id ="messageY"></div>
          </div>
          <div class="modal-footer">
            <!-- <input type="submit" value ="Submit"> -->
            <button type="submit" class="btn btn-secondary" data-dismiss="modal" value = "submit">Login</button>
            <button type="reset" id ="reset" class="btn btn-primary">Reset</button>
          </div>
          <p>New User?</p>
          <a href="register.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Register</a>
        </form>
    </div>
    </section>


<script type="text/javascript" src = js/jquery.js></script>
<script type="text/javascript" src = js/bootstrap.js></script>

</body>
</html>