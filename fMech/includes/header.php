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
	<!-- Mechanical Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/fMechStyle.css">
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
				<a href="Intro.html">Intro</a>
				<a href="units.php">Units</a>
				<a href="pressure.php">Pressure</a>
				<a href="viscosity.php">Viscosity</a>
				<a href="staticFluids.php">Statics</a>
				<a href="buoyancy.php">Buoyancy</a>
				<a href="dynamicFluids.php">Dynamics</a>
				<a href="eqSheet.php">Equation Sheet</a>
				<a href="liquidProperties.php">Liquid Properties</a>
				<a href="ref.php">Reference</a>
			</div>
		</div>