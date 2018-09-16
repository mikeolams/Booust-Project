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
	<?php if (isset($_SESSION['userName']) ):  ?>
	<div id= contact class="container">
	<div align="right"><a href="login.php">Log Out</a></div>
	<h2 align="center"> You are most welcome <?php echo $_SESSION['userName']; ?>!</h2>
	</div>
	<?php else:?>
 <!-- <div class ="container" align="center">
  <div align="right"><a href="login.php">Login</a></div>
  <h1>My Movie</h1>
</div>  -->
	<header>
		<div class = "headerTopic"><h1>The Flame FILM Rentals</h1><span><img width="50px" height="50px" src="images/imagesLogo.jpg"></span>
		</div>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand"><img width="30px" height="30px" src="images/imagesLogo.jpg"><strong><em> Flame FILM Rentals</em></strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#welcome">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="movies.php">Available Movies</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="gallery.php">Gallery</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="careers.php">Careers</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Services
		        </a>
		        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="gallery.php">Cinema Show</a>
		          <a class="dropdown-item" href="index.php">Film Rentals</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="contact.php">Other Services</a>
		        </ul>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="contact.php">Contact Us</a>
		      </li>
		      <li>
		      	<a class="nav-link" href="login.php">Login</a>
		  	  </li>
		    </ul>
		    <form id="form" class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		    <button type="button" id="show" class="btn btn-success btn-sm">Show Search</button>
			<button type="button" id="hide" class="btn btn-danger btn-sm">Hide Search</button>
		  </div>
		</nav>
		<div class="containerBackground" style="background-image: url(images/im/imagesback1.jpg); background-attachment: scroll; background-size:cover;  height:700px; background-position: center; background-repeat: no-repeat;" >
			<div class ="adverthead">
					<nav id ="nava">FILM Rental Service that is sure!</nav>
			</div>
			<div class =backgroundcontent>
			<section id ="header">
				<div class= "headerTop"> </div>
				<!-- <div><h2>HOW WE CAN HELP YOU</h2>
<p>We have the experience and capacity to meet the needs everyone. Take advantage of our vast experience in the movie Industry and we will help improve the connectivity, efficiency and security of your enttertament experience. We offer a no-strings-attached free Preliminary Audit to identify what you are like now and what we think you will be interested in the future.</p></div> -->
			</section>
			</div>	  
		</div>
	</header>
	<content>
		<div class="row">
			<div class="col-xs-1 col-sm-2 col-lg-2">
				<div class = "imagebackground" style="background-image: url(images/background.jpg); background-attachment: scroll; background-position: top left;" > </div>
			</div>
	        <div class="col-xs-9 col-sm-8 col-lg-7">
	        	<div class = "pText">
					<p><h1 id= "welcome">Welcome to Professional Galleria Inc.</h1>
					<h4>A subsidiary of the Flame Film Rental</h4>
					</p>
					<p>Based in PortHarcourt, The Flame Film Rental is a full-service rental house, providing camera, grip and lightning equipment and services for film, television and advertising since 2003.</p>
					<p>We offer a large collection of cameras, lenses (anamorphic, spherical, vintage and specialty), filters and diopters, grip equipment (Dollies, Cranes, Remote and Stabilized Heads, etc.), lightning equipment (LED systems, Tungsten, Fluorescent, Daylight lamp heads, etc.) as well as high quality, well-maintained equipment, outstanding service, and fantastic cinematic tools, that make the Flame a powerful, reliable partner for filmmakers.</p>
					<p>The Flame embodies a huge wealth of technical knowledge and industry experience, which enables us to offer expert advice and support throughout the entire production process. Also, we continually invest in the latest products from leading industry manufacturers.</p>
					<p>Our motto is <em>"Passion for FILMMAKING"</em> and we do our best to fulfill it! 
					</p>
				</div>
			</div>
	        <div class="col-xs-2 col-sm-2 col-lg-3">
	        	<div class ="advert">
					<nav id ="nava">Vist us today</nav>
					<nav id ="navb" >Checkout the cinamas</nav>
					<nav id ="navc">Latest Movies</nav>
					<nav id ="navd">A try</nav>
					<nav id ="nave">Will convince!</nav>
				</div>
			</div>
		</div>
	</content>
	<div class="container-fluid">
	<footer class="footer">
		<div class="container">
			<p class="text-muted">
				<nav class ="footerImage">
					<span><img width="30px" height="30" src="images/image.jpg"></span>
					<span><img width="30px" height="30" src="images/image1.png"></span>
					<span><img width="30px" height="30" src="images/image2.png"></span>
					The Flame Film also operates a full cinema in PortHarcout, Nigeria.
					<span><img width="30px" height="30" src="images/image3.jpg"></span>
					<span><img width="30px" height="30" src="images/image4.png"></span>
					<span><img width="30px" height="30" src="images/image5.jpg"></span>
					<span><img width="30px" height="30" src="images/image6.png"></span>
				</nav>
				<nav class="mastfoot">
					<span class = "footNote">Tel:</span><span> 087900098;</span>
					<span class = "footNote"> email address:</span><span><a href=""> info@theflamefilm.com</a>;</span>
					<span class = "footNote"> twitter handle:</span><span> <a href="https://twitter.com/mikeAndela_Nigeria">@theflamefilm</a>;</span>
					<span class = "footNote"> facebook:</span><span><a href="https://facebook.com/mikeAndela_Nigeria"> theflamefilm</a></span>
					<p id = "copright">&copy; 2018 The Flame Film, Inc.</p>
				</nav>	
			</p>
		</div>
	</footer>
</div>
<?php endif; ?>
<script type="text/javascript" src = js/jquery.js></script>
<script type="text/javascript" src = js/bootstrap.js></script>
<script type="text/javascript">
	
		$("#hide").click (function(){ $("#form").hide();});	
		$("#show").click (function(){ $(".form-inline").show();});

</script>
</body>
</html>




