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
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-NVHK45K');</script>
	<!-- End Google Tag Manager -->
</head>
<!-- Main Body -->
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVHK45K" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
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
				<a href="index.php">Home</a>
				<a href="amps.php">Amperage</a>
				<a href="volts.php">Voltage</a>
				<a href="resistance.php">Resistance</a>
				<a href="dcSeries.php">Series Circuits</a>
				<a href="dcParallel.php">Parallel Circuits</a>
				<a href="Power.php">Power</a>
				<a href="indusctance.php">Inductance</a>
				<a href="capacitance.php">Capacitance</a>
				<a href="diodes.php">Diodes</a>
				<a href="transistors.php">Transistors</a>
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
				<button class="dropdown-btn">
					<a href="#">Reference</a>
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-container">
					<a href="ref.php">General</a>
					<a href="#">Schematics</a>
					<a href="#"></a>
				</div>
			</div>
		</div>