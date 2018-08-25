<?php 
// Start the session
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton"> -->
=======
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton"> -->
>>>>>>> 12a525ed78a733a8ef5f794c4b1886fdda529c19
    <title>film rental business site</title>
    <link rel="stylesheet" href="css/index.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <style type="text/css"></style>

     <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>


<<<<<<< HEAD
        <!-- php simple if and else statement  -->

<?php if (isset($_SESSION['firstName']) ):  ?>

<div class ="container" align="center">
  <div align="right"><a href="login.php">Log out</a></div>
  <h1>You are most welcome, <?php echo $_SESSION['firstName']; ?>!</h1>
=======
		  	<!-- php simple if and else statement  -->

<?php if (isset($_SESSION['userName']) ):  ?>

<div class ="container" align="center">
  <div align="right"><a href="login.php">Log out</a></div>
  <h1>Welcome, <?php echo $_SESSION['userName']; ?>!</h1>
>>>>>>> 12a525ed78a733a8ef5f794c4b1886fdda529c19
</div>

<?php else:?>
 <div class ="container" align="center">
  <div align="right"><a href="login.php">Login</a></div>
  <h1>My Movie</h1>
</div> 
<?php endif; ?>

<script type="text/javascript" src = js/jquery.js></script>
<script type="text/javascript" src = js/bootstrap.js></script>


</body>
</html>
