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


		  	<!-- php simple if and else statement  -->

<?php if (isset($_SESSION['userName']) ):  ?>

<div class ="container" align="center">
  <div align="right"><a href="login.php">Log out</a></div>
  <h1>Welcome, <?php echo $_SESSION['userName']; ?>!</h1>
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
