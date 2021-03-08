<?php
	$title = "Capacitance";
	require "../header.php";
?>
<h1>Capacitance</h1>
<div class="mainSep"></div>
<h2><i><b>WARNING</b></i></h2>
<div class="secSep"></div>
<p></p>
<div class="secSep"></div>
<h2>Intro</h2>
<div class="secSep"></div>
<p></p>
<div class="secSep"></div>
<h2>Intensional Capacitance</h2>
<div class="secSep"></div>
<p></p>
<div class="secSep"></div>
<h2>Unintensional Capacitance</h2>
<div class="secSep"></div>
<p></p>
<div class="secSep"></div>
<h2>Types of Capacitors</h2>
<div class="secSep"></div>
<p></p>
<div class="secSep"></div>
<h3>Finding/Making a Capacitor</h3>
<div class="secSep"></div>
<p>$$C = 0.2235 {{KA}\over{d}}(N-1)$$</p>
<p><b>Where:</b></p>
<ul>
	<li>C is the capacitance in  picofarads (pF)</li>
	<li>K is the dielectric constant</li>
	<li>A is the area of one plate in square inches</li>
	<li>d is the distance between the plates in inches</li>
	<li>N is the number of plates</li>
</ul>
<div class="secSep"></div>
<h3>Dielectric Constant Table</h3>
<div class="secSep"></div>
<table>
	<tr>
		<th>Material</th>
		<th>Dielectric Constant</th>
		<th>Temperature ($^{\circ}$C)</th>
	</tr>
	<tr>
		<td>Vacuum (Perfect)</td>
		<td>1</td>
		<td>20</td>
	</tr>
	<tr>
		<td>Air</td>
		<td>1.000589</td>
		<td>20</td>
	</tr>
	<tr>
		<td>PTFE (Teflon)</td>
		<td>2.1</td>
		<td>20</td>
	</tr>
	<tr>
		<td>XLPE (Polyethylene)</td>
		<td>2.25</td>
		<td>20</td>
	</tr>
	<tr>
		<td>Polyimide</td>
		<td>3.4</td>
		<td>20</td>
	</tr>
	<tr>
		<td>Polypropylene</td>
		<td>2.2-2.36</td>
		<td>20</td>
	</tr>
	<tr>
		<td><a href="../matSci/plasticRef.php">Polystyrene (PS)</a></td>
		<td>2.4-2.7</td>
		<td>20</td>
	</tr>
	<tr>
		<td>Carbon Disulfide</td>
		<td>2.6</td>
		<td>20</td>
	</tr>
	<tr>
		<td>Mylar(BoPET)</td>
		<td>3.1</td>
		<td>20</td>
	</tr>
	<tr>
		<td>Paper</td>
		<td>1.4</td>
		<td>20</td>
	</tr>
	<tr>
		<td>Mica</td>
		<td>3-6</td>
		<td>20</td>
	</tr>
	<tr>
		<td>Silicon dioxide</td>
		<td>3.9</td>
		<td>20</td>
	</tr>
	<tr>
		<td>Sapphire</td>
		<td>8.9-11.1</td>
		<td>20</td>
	</tr>
	<tr>
		<td>Concrete</td>
		<td>4.5</td>
		<td>20</td>
	</tr>
	<tr>
		<td>Glass (Pyrex)</td>
		<td>4.7</td>
		<td>20</td>
	</tr>
	<tr>
		<td>Neoprene</td>
		<td>6.7</td>
		<td>7</td>
	</tr>
	<tr>
		<td>Diamond</td>
		<td>5.5-10</td>
		<td>20</td>
	</tr>
</table>
<p><i>Table from: <a href="https://en.wikipedia.org/wiki/Relative_permittivity">Wikipedia</a></i></p>
<div class="secSep"></div>
<h2>Sizes</h2>
<div class="secSep"></div>
<p></p>
<div class="secSep"></div>
<h2>Capacitors in Series</h2>
<div class="secSep"></div>
<p></p>
<div class="secSep"></div>
<h2>Capacitors in Parallel</h2>
<div class="secSep"></div>
<p></p>
<div class="secSep"></div>
<h2>Measuring Capacitance</h2>
<div class="secSep"></div>
<p></p>
<div class="secSep"></div>
<div class="mainSep"></div>
<table class="EquationTB">
	<thead><tr class="EqTBHeader">
			<th><h2>Equation ID</h2></th>
			<th><h2>Equation Name</h2></th>
			<th><h2>Equation</h2></th>
			<th><h2>Requires</h2></th>
			<th><h2>Extends</h2></th>
	</tr></thead>
	<tbody>
		<tr>
			<td>E-?</td>
			<td>Capacitance in a Series Circuit</td>
			<td>$${{1}\over{C_{Total}}} = {{1}\over{C_1}} + {{1}\over{C_2}} + {{1}\over{C_n}}$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>Capacitance in a Parallel Circuit</td>
			<td>$$C_{Total} = C_1 + C_2 + C_n$$</td>
			<td></td>
			<td></td>
		</tr>
	</tbody>	
</table>
<?php
	require "../footer.php";
?>