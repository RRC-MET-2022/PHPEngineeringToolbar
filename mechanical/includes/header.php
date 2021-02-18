<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Tab Title -->
	<title>Engineering Toolbar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Tab Icon -->
	<link rel="icon" href="../img/favicon.ico" type="image/ico" sizes="16x16">
	<!-- Reset Style -->
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<!-- Joint JS Style -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jointjs/2.1.0/joint.css" />
	<!-- Mechanical Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/mechStyle.css">
	<!-- Background Creation Script -->
	<script src="../js/background.js"></script>
	<!-- Init MathJax -->
	<script>
		MathJax = {
		  tex: {
		    inlineMath: [['$', '$'], ['\\(', '\\)']]
		  },
		  svg: {
		    fontCache: 'global'
		  }
		};
	</script>
	<!-- Import Math Jax -->
	<script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js"></script>
	<!-- Import JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Import Lodash -->
	<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.20/lodash.min.js"></script>
	<!-- Import Backbone -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js" integrity="sha512-9EgQDzuYx8wJBppM4hcxK8iXc5a1rFLp/Chug4kIcSWRDEgjMiClF8Y3Ja9/0t8RDDg19IfY5rs6zaPS9eaEBw==" crossorigin="anonymous"></script>
	<!-- Import Joint -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jointjs/3.3.1/joint.min.js" integrity="sha512-d/ffKwyaXptpd9WXkO5BXMu/qdqfMW9AyNkKrmuHaVe22/qmzWX+Ku8hTuR9iR7cmE1QuuAmaHMWXZSArJ3GLA==" crossorigin="anonymous"></script>
<!-- Main Body -->
<body>
	<!-- This allows the Background to be in the background -->
	<canvas id="bgd" class="bgd">
	<!-- Background -->
	</canvas>

	<script>
		function displayWindowSize(){bgcanvas();}
     	window.addEventListener("resize",displayWindowSize);
	//background dynamic reloader 
	</script>

	<!-- Start of mainContent -->
	<div class="mainContent" id="mainContent">

		<!-- Side Bar Navigation -->
		<div class="sideBar" id="navEl">
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<button class="dropdown-btn">
					<a href="#">Design</a>
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-container">
					<a href="desSafetyFactor.php">Safety Factor</a>
					<a href="desFasteners.php">Fasteners</a>
					<a href="desBelts.php">Belts</a>
					<a href="desChains.php">Chains</a>
					<a href="desBearings.php">Bearings</a>
					<a href="desGears.php">Gears</a>
					<a href="desMotors.php">Motors</a>
				</div>
				<button class="dropdown-btn">
					<a href="#">GD&T</a>
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-container">
					<a href="gdtFeatures.php">Features</a>
					<a href="gdtSymbols.php">Symbols</a>
					<a href="gdtDatums.php">Datums</a>
					<a href="gdtForm.php">Form</a>
					<a href="gdtOrientation.php">Orientation</a>
					<a href="gdtPosition.php">Position</a>
					<a href="gdtProfiles.php">Profiles</a>
					<a href="gdtDFControls.php">Datum Feature Controls</a>
					<a href="gdtCMM.php">CMM Programming</a>
				</div>
				<button class="dropdown-btn">
					<a href="#">Manufacturing</a>
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-container">
					<a href="manuForging.php">Forging</a>
					<a href="manuMilling.php">Milling</a>
					<a href="manuTurning.php">Turning</a>
					<a href="manuDrillThread.php">Drilling/Threading</a>
					<a href="manuWelding.php">Welding</a>
					<a href="manuFits.php">Fits, Tolerance, Allowance</a>
					<a href="manuGCode.php">G-Code</a>
				</div>
			</div>
		</div>