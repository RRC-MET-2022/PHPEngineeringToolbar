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
	<link rel="stylesheet" type="text/css" href="css/elecStyle.css">
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
</head>
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
				<a href="#">Amperage</a>
				<a href="#">Voltage</a>
				<a href="#">Resistance</a>
				<button class="dropdown-btn">
					<a href="#">Components</a>
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-container">
					<a href="#">Resistors</a>
					<a href="#">Diodes</a>
					<a href="#">Capacitors</a>
					<a href="#">Inductors</a>
					<a href="#">Transistors</a>
				</div>
				<button class="dropdown-btn">
					<a href="#">DC Circuits</a>
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-container">
					<a href="#">Series Circuits</a>
					<a href="#">Parallel Circuits</a>
				</div>
				<button class="dropdown-btn">
					<a href="#">AC Circuits</a>
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-container">
					<a href="#"></a>
				</div>
				<button class="dropdown-btn">
					<a href="#">Reference</a>
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-container">
					<a href="#">Schematics</a>
					<a href="#"></a>
				</div>
				<button class="dropdown-btn">
					<a href="#">Programming</a>
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-container">
					<a href="#">Reference</a>
					<a href="#">Data Types</a>
					<a href="#">Variable Modifiers</a>
					<a href="#">Logical Operators</a>
					<a href="#">Math Operators</a>
					<a href="#">Loops</a>
					<a href="#">Nesting</a>
					<a href="#">Function</a>
					<a href="#">Object Orientated Programming</a>
					<a href="#">Constructors</a>
				</div>
			</div>
		</div>