<?php
	include_once 'includes/header.php';
?>
<h1>Voltage</h1>
<div class="mainSep"></div>
<h2>Explanation</h2>
<div class="secSep"></div>
<p>Volts is the difference in electrons in two points in a circuit. <b>Remember that this is a difference not a quantity!</b> Concept is a little confusing at first but with enough practice, it should become a very useful tool. When finding the volts on a circuit we are looking for two points with different amounts of electrons. This allow for systems where negative voltage is possible. Usually you get negative voltage when using the black lead on the red lead place and vise versa. But sometimes negative voltage is used. Think of the pressure difference between two points in a hose. If you put a valve on the end of the hose, the pressure difference will be equal to the pressure on the side with water since it would be that side minus zero. But if we were measuring from the empty side of the hose, it would be the negative amount of pressure.</p>
<div class="secSep"></div>
<h2>Ohm's Law</h2>
<div class="secSep"></div>
<p>Ohm's Law orignially was used to measure voltage. The law states that the voltage is the product of the amperage and the resistance.</p>
<p>$$\text{Voltage (V or E)} = \text{Current (I)} \cdot \text{Resistance (R)}$$</p>
<div class="secSep"></div>
<h2>Series</h2>
<div class="secSep"></div>
<p>In a series circuit voltage will expierence a cool thing called voltage drop. As we measure voltage accross certain components the voltage will decrease with from the start by the proportion of resistance to the total resistance. Basically the voltage will decrease after every resistor by the size of the resistor. To simplify this, the total voltage in a circuit will be just the sum of each voltage accross each component.</p>
<p>$$\text{Voltage}_{\text{Total}} (V_{\text{Total}}) = V_1 + V_2 + ... + V_N$$</p>
<div class="secSep"></div>
<h2>Parallel</h2>
<div class="secSep"></div>
<p>Voltage in parallel will always be the same on both sides of the parallel circuit. Since, the difference in electrons on both sides should be the same.</p>
<p>$$\text{Voltage}_{\text{Total}} (V_{\text{Total}} = V_{\text{Anywhere}}$$</p>
<div class="secSep"></div>
<h2>Voltmeter</h2>
<div class="secSep"></div>
<p>To measure just put the meter in parallel with the section you want to measure.</p>
<div class="mainSep"></div>
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
			<td>Solving for Voltage in Ohm's Law</td>
			<td>$$\text{Voltage (V or E)} = \text{Current (I)} \cdot \text{Resistance (R)}$$</td>
			<td>Amperage, Resistance</td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>Voltage in a Series Circuit</td>
			<td>$$\text{Voltage}_{\text{Total}} (V_{\text{Total}}) = V_1 + V_2 + ... + V_N$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>Voltage in a Parallel Circuit</td>
			<td>$$\text{Voltage}_{\text{Total}} (V_{\text{Total}} = V_{\text{Anywhere}}$$</td>
			<td></td>
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
		<td><b>Voltmeter</b></td>
		<td>A device for measuring voltage.</td>
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
	include_once 'includes/footer.php';
?>