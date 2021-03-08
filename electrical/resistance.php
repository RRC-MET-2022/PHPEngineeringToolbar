<?php
	$title = "Resistance";
	require "../header.php";
?>
<h1>Resistance and Resistors</h1>
<div class="mainSep"></div>
<h2>Explanation</h2>
<div class="secSep"></div>
<p>Resistance is the amount that something resists the flow of electrons. Think of the resistance as being the diameter of the pipe. As the pipe becomes smaller, the more effort it will take to push through more electrons.</p>
<div class="secSep"></div>
<h2>Ohm's Law</h2>
<div class="secSep"></div>
<p>When using Ohm's law we often assume that the resistance is the one constant. But for some situations resistance will change.</p>
<p>$$\text{Resistance} = {{{\text{Voltage}}\over{\text{Current}}}}$$</p>
<div class="secSep"></div>
<h2>Series Circuits</h2>
<div class="secSep"></div>
<p>In series the resistance of the circuit is the sum of all resistances in the circuit.</p>
<p>$$\text{Resistance}_{\text{Total}} = R_1 + R_2 + ... + R_N$$</p>
<div class="secSep"></div>
<h2>Parallel Circuits</h2>
<div class="secSep"></div>
<p>The total resistance of parallel circuit is the inverse of the inverse of each resistance in parallel. Kinda confusing. Just look at the equation:</p>
<p>$$R_{\text{Total}} = \left({{1}\over{R_1}} + {{1}\over{R_2}} + ... + {{1}\over{R_N}}\right)^{-1}$$</p>
<div class="secSep"></div>
<h2>Types of resistors!</h2>
<div class="secSep"></div>
<table>
	<tr>
		<th>Name</th>
		<th>Type</th>
		<th>Material</th>
		<th>Uses</th>
		<th>Picture</th>
	</tr>
	<tr>
		<td><b>Carbon Composition</b></td>
		<td>Linear Fixed</td>
		<td></td>
		<td></td>
		<td><img src=""></td>
	</tr>
	<tr>
		<td><b>Film Resistor</b></td>
		<td>Linear Fixed</td>
		<td></td>
		<td></td>
		<td><img src=""></td>
	</tr>
	<tr>
		<td><b>Thermistor</b></td>
		<td>Nonlinear Sensor</td>
		<td></td>
		<td></td>
		<td><img src=""></td>
	</tr>
	<tr>
		<td><b>Potentiometer</b></td>
		<td>Linear Variable</td>
		<td></td>
		<td></td>
		<td><img src=""></td>
	</tr>
	<tr>
		<td><b>Rheostat</b></td>
		<td>Linear Variable</td>
		<td></td>
		<td></td>
		<td><img src=""></td>
	</tr>
	<tr>
		<td><b>SMD (Surface Mount)</b></td>
		<td>Nonlinear</td>
		<td></td>
		<td></td>
		<td><img src=""></td>
	</tr>
	<tr>
		<td><b>Wire Wound</b></td>
		<td>Linear Fixed</td>
		<td></td>
		<td></td>
		<td><img src=""></td>
	</tr>
</table>
<div class="secSep"></div>
<h2></h2>
<div class="secSep"></div>
<h2>How to Pick the right Voltage?</h2>
<div class="secSep"></div>
<h3>Carbon Film Resistor Color Code</h3>
<div class="secSep"></div>
<p></p>
<div class="secSep"></div>
<h3>SMD Resistor Codes</h3>
<div class="secSep"></div>
<p>$$B = In {{R_{T1}}\over{R_{T2}}}/\left({{1}\over{T_1}}-{{1}\over{T_2}}\right)$$</p>
<div class="secSep"></div>
<h2>Equation Table</h2>
<div class="secSep"></div>
<table class="EquationTB">
	<!-- Table Head -->
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
			<td>Solving for Resistance in Ohm's Law</td>
			<td>$$\text{Resistance} = {{{\text{Voltage}}\over{\text{Current}}}}$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>Resistance in Series</td>
			<td>$$R_{\text{Total}} = R_1 + R_2 + ... + R_N$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>Resistance in Parallel</td>
			<td>$$R_{\text{Total}} = \left({{1}\over{R_1}} + {{1}\over{R_2}} + ... + {{1}\over{R_N}}\right)^{-1}$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
	</tbody>
</table>
<div class="secSep"></div>
<h2>Glossary</h2>
<div class="secSep"></div>
<table>
	<tr>
		<th>Term</th>
		<th>Definition</th>
	</tr>
	<tr>
		<td><b>Thermistor</b></td>
		<td></td>
	</tr>
	<tr>
		<td><b>Variable Resistor</b></td>
		<td></td>
	</tr>
	<tr>
		<td><b>Ohm</b></td>
		<td></td>
	</tr>
	<tr>
		<td><b>Potentiometer</b></td>
		<td></td>
	</tr>
	<tr>
		<td><b>Rheostat</b></td>
		<td></td>
	</tr>
</table>
<div class="secSep"></div>
<h2>References</h2>
<div class="secSep"></div>
<table>
	<tr>
		<th></th>
	</tr>
</table>
<?php
	require "../footer.php";
?>