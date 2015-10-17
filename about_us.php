<?php
//Start the PHP session
session_start();

//Calls to base hit counter with unique visitors IP tracking.
include_once("hit_counter.php");

//Connect to SQL Database and include custom sqlQuerry function.
include_once("../includes/sql.php");
?>
<!DOCTYPE html>
<html>
<!-- || Page Head || -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<title>Meet the WAC Team</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<link href="css/custom.css" rel="stylesheet">
	<style>
	.bg-web{
		background-color:#DB0C09;
	}
	.bg-chairs{
		background-color:#2A99D6;
	}
	.bg-heads{
		background-color:#36CC79;
	}
	</style>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<!-- || Main Page Content || -->
<body style="position:relative;">

<?php include_once("tracking.php") ?>
<!-- | Menu Bar (Construction) | -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt = "World Affairs Conference" height="25px"></img></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Registration</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conference Information <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="keynote.php">Keynote Address</a></li>
            <li><a href="#">Morning Panel</a></li>
            <li><a href="#">Plenaries</a></li>
            <li><a href="#">Closing Panel</a></li>
            <li><a href="#">Schedule</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About WAC <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="about_us.php">Meet the Team</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- Content -->
<div style="text-align:center; color:#ffffff;">
<h2>Meet the WAC Team</h2>
</div>
</br>
<div align="middle">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	        <div class="carousel-mod carousel-inner" role="listbox">
	          <div class="carousel-mod item active bg-web">
	          	<img src="/img/bio/mwang.png" alt="Matthew Wang">
	           <!--	<span style="position:absolute; bottom:0px; left:0px; width:100%; height:100%; background-color:#DB0C0A; opacity:1;" class="hidden-xs"></span> -->
	          </div>
	          <div class="carousel-mod item bg-web">
	            <img src="/img/bio/jsarick.png" alt="Jack Sarick">
	          </div>
	          <div class="carousel-mod item">
	            <img src="/img/bio/mwang.png" alt="Third slide">
	          </div>
	          <div class="carousel-mod item">
	            <img src="/img/bio/jsarick.png" alt="Fourth slide">
	          </div>
	        </div>
	        <!--
	        <a class="carousel-mod left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	          <span class="sr-only">Previous</span>
	        </a>
	        <a class="carousel-mod right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	          <span class="sr-only">Next</span>
	        </a>
	        -->
	      </div>
	  </div>
</br>
<div style="padding:35px; text-align:center; color:#ffffff;">
WAC is a student-run organisation that spans two schools, one hundred students, and thousands of hours of work. Our goal is to provide over eight hundred students with current affairs knowledge, and a positive experience.
</br>
This kind of work doesn't appear out of thin air: we have many students working hard to make WAC the best current affairs conference there is.

<h2>We'd Like to Thank:</h2>
<h3>Last Year's Website Team</h3>
Nick Elder, Derek Lam, Kinton Cheung
</br>
<h3>Website Consultants</h3>
Aidan Harradence, Alex Roberts, Camran Hansen, Evan Boeckh, John Mace, Kevin Olds, Matt Jackman, Zack Nathan

<?php
$rando = rand(1,2);
$randa = rand(1,3);
if($rando == 1){
	$teamNames = "Jack Sarick, and Matthew Wang";
	if($randa == 1){
		$lteamNames = "Nick Elder, Derek Lam, and Kinton Cheung";
	}
	elseif($randa == 2){
		$lteamNames = "Derek Lam, Kinton Cheung, and Nick Elder";
	}
	elseif($randa == 3){
		$lteamNames = "Kinton Cheung, Nick Elder, and Derek Lam";
	}
}
elseif($rando == 2){
	$teamNames = "Matthew Wang, and Jack Sarick";
	if($randa == 1){
		$lteamNames = "Nick Elder, Derek Lam, and Kinton Cheung";
	}
	elseif($randa == 2){
		$lteamNames = "Derek Lam, Kinton Cheung, and Nick Elder";
	}
	elseif($randa == 3){
		$lteamNames = "Kinton Cheung, Nick Elder, and Derek Lam";
	}
}

?>

<nav class="navbar navbar-default navbar-fixed-bottom navbar-inverse navbar-footer">
  <div class="container-fluid navbar-footer" style ="text-algin:center;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt = "World Affairs Conference" height="25px"></img></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2" >
      <ul class="nav navbar-nav">
        <li><a href="about_us.php">WAC TEAM</a></li>
        <li><a href="#">PLENARIES</a></li>
        <li><a href="#">REGISTER</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <p class="navbar-text" style ="font-size:11px; vertical-align:middle; display:table-cell;">Handmade by the WAC Webmaster Team: <?php echo $teamNames; ?></br>With help from last year's team: <?php echo $lteamNames; ?></p>
      </ul>
     </div>
 </div>
</nav>
<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>


</body>
</html>