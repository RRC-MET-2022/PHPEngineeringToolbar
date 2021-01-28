<?php
	include_once 'includes/header.php';
?>
<H1>Projects</H1>
<!-- Row 1 -->
<div class="row">
	<!-- DL580 G7 -->
	<div class="columnL" align="center">
		<!-- Liquid Cooling Project -->
		<H2>Liquid Cooling the DL580 G7</H2>
		
		<!-- Slideshow of Images -->
		<div class ="slideshow-container">
			
			<div class="mySlides1 fade">
				<div class="numbertext">1 / 3</div>
				<img src="img/DL580G7/DL580 G7 Water.png" width="100%">
				<div class="caption">Finished With top off.</div>
			</div>
			<div class="mySlides1 fade">
				<div class="numbertext">2 / 3</div>
				<img src="img/DL580G7/pumpIso.png" width="50%">
				<div class="caption">An isolated loop.</div>
			</div>
			<div class="mySlides1 fade">
				<div class="numbertext">3 / 3</div>
				<img src="img/DL580G7/Pump V2.png" width="100%">
				<div class="caption"></div>
			</div>
			<!-- Arrow Buttons -->
			<a class="prev" onclick="plusSlides(-1, 0)">&#10094</a>
			<a class="next" onclick="plusSlides(1, 0)">&#10095</a>
			<!-- Collapible Button -->
			<div align="right">
				<button type="button" class="collapsible grow collL"></button>
				<!-- Expandable Information -->
				<div class="content">
					<p>This project was for a class in Engineering Design. I was tasked with creating something from a conceptual design. Intial a dream, my server is quite loud and can get annoying over time. Using a liquid cooled solution would both reduce sound and allow for routing of heat to very specific areas of the server.</p>
					<h3>Project Modeled: December 2020</h3>
				</div>
			</div>
			
		</div>
	</div>
	<!-- Velomobile -->
	<div class="columnR" align="center">
		<H2>Velomobile</H2>
		<!-- Slideshow of Images -->
		<div class ="slideshow-container">
			<div class="mySlides2 fade">
				<div class="numbertext">1 / 3</div>
				<img src="img/Velomobile/Final.png" width="75%">
				<div class="caption">Finished with one side off.</div>
			</div>
			<div class="mySlides2 fade">
				<div class="numbertext">2 / 3</div>
				<img src="img/Velomobile/Frame.png" width="75%">
				<div class="caption">The Frame.</div>
			</div>
			<div class="mySlides2 fade">
				<div class="numbertext">3 / 3</div>
				<img src="img/Velomobile/Rear Derailleur.png" width="15%">
				<div class="caption">Rear Derailleur.</div>
			</div>
			<!-- Arrow Buttons -->
			<a class="prev" onclick="plusSlides(-1, 1)">&#10094</a>
			<a class="next" onclick="plusSlides(1, 1)">&#10095</a>
			<!-- Collapible Button -->
			<div align="right">
				<button type="button" class="collapsible grow collR"></button>
				<!-- Expandable Information -->
				<div class="content conR">
					<p>This Velomobile was my capstone project for manufacturing computer aided design. Using images, some schematics, and a broken rear derailleur, I modeled this within the span of 4 weeks.</p>
					<h3>Project Modeled: March 2020</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Gap for Spacing -->
<div class="row">
</div>	
<!-- Row 2 -->
<div class="row">
	<!-- Steeping Tom -->
	<div class="columnL" align="center">
		<H2>Steaping Tom</H2>
		<!-- Slideshow of Images -->
		<div class ="slideshow-container">
			<div class="mySlides3 fade">
				<div class="numbertext">1 / 4</div>
				<img src="img/Steeping Tom/Final.png" width="75%">
				<div class="caption">Finished with one side off.</div>
			</div>
			<div class="mySlides3 fade">
				<div class="numbertext">2 / 4</div>
				<img src="img/Steeping Tom/Cutaway.png" width="75%">
				<div class="caption">Half Section.</div>
			</div>
			<div class="mySlides3 fade">
				<div class="numbertext">3 / 4</div>
				<img src="img/Steeping Tom/Electrical1.png" width="75%">
				<div class="caption">Internal Electronics.</div>
			</div>
			<div class="mySlides3 fade">
				<div class="numbertext">4 / 4</div>
				<img src="img/Steeping Tom/Electrical2.png" width="75%">
				<div class="caption">External UI.</div>
			</div>
			<!-- Arrow Buttons -->
			<a class="prev" onclick="plusSlides(-1, 2)">&#10094</a>
			<a class="next" onclick="plusSlides(1, 2)">&#10095</a>
			<!-- Collapible Button -->
			<div align="right">
				<button type="button" class="collapsible grow collL"></button>
				<!-- Expandable Information -->
				<div class="content conL">
					<p>This project was a group effort with classmates from my manufacturing computer aided design class. We were challenged to create self heating mugs. We choose something that could be manufactured and still be below the price of some other mugs on the market.</p>
					<h3>Project Modeled: February 2020</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include_once 'includes/footer.php';
?>