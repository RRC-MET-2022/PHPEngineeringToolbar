<?php
	include_once 'includes/header.php';
?>
<h1>Amperage</h1>
<div class="mainSep"></div>
<h2>Explanation</h2>
<div class="secSep"></div>
<p>Amperage is the number of electrons that flow through a circuit section. Try to think the volume of water passing through a pipe.</p>
<div class="secSep"></div>
<h2>Ohm's Law</h2>
<div class="secSep"></div>
<p>Ohm's law states that amperage is inversely proportional to the resistance of the circuit. In an other way of thinking it means as the resistance in a circuit increases the amps will decrease. The cool thing though it that the amperage is also directly proportional to the voltage. Basically as the voltage increases, the amperage will also increase. To see this in action the equation is: $\text{Amperage} (I) = {{\text{Voltage (V or E)}}\over{\text{Resistance (R)}}}$</p>
<div class="secSep"></div>
<h2>Series</h2>
<div class="secSep"></div>
<p>Amperage in series is pretty simple. The current will always be the same at anypoint in the circuit. Basically if there is only one way for electrons to flow, it will be the same flow rate through the entire system. In this case, the system is just a series circuit.</p>
<p>$$\text{Amperage}_{\text{total}} = \text{Amperage}_{\text{anywhere}}$$</p>
<div class="secSep"></div>
<h2>Parallel</h2>
<div class="secSep"></div>
<p>Parallel circuits make this interesting. Water in a pipe system with many paths to the same location will always use the path with least resistance. Funny enough that is exactly how electrons travel in a parallel system. They will travel through the path of reistance inversely proportional in respect to the total resistance. To find the total amperage in a parallel system just add the sum of each parallel section. So: $\text{Amperage}_{\text{Total}} (I_{\text{Total}}) = I_1 + I_2 + ... + I_N$</p>
<div class="secSep"></div>
<h2>Ammeter</h2>
<div class="secSep"></div>
<p>When measuring amperage, always <b>put the ammeter in series</b> with the circuit. You might be temped to just put one lead on one side and another on the other. But this can be very dangerous on parallel circuits. When you bridge over a resistor to the other side, the ammeter effectively becomes a very low ohm resistor. And if you remember what Ohm's law explained, as the resistance decreases, the current will increase. So using an ammeter in parallel to a circuit effectively by-passes resistance between the probes. <b>Always put the ammeter in series!</b></p>
<div class="secSep"></div>

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
			<td>Solving for Amperage in Ohm's Law</td>
			<td>$$\text{Amperage} (I) = {{\text{Voltage (V or E)}}\over{\text{Resistance (R)}}}$$</td>
			<td>Voltage, Resistance</td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>Amperage in a Series Circuit</td>
			<td>$$\text{Amperage}_{\text{total}} = \text{Amperage}_{\text{anywhere}}$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>Amperage in a Parallel Circuit</td>
			<td>$$\text{Amperage}_{\text{Total}} (I_{\text{Total}}) = I_1 + I_2 + ... + I_N$$</td>
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
		<td><b>Ammeter</b></td>
		<td>A device for measuring amperage.</td>
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