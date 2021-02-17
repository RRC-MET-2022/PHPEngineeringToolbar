;<?php
	include_once 'includes/header.php';
?>
<h1>DC Parallel Circuits</h1>
<p>
	<h4>Rule of thumb:</h4>
	<ul>
		<li>All components have the same voltage.</li>
		<li>Currents can be summed.</li>
		<li>Recipricals for resistances.</li>
	</ul>
</p>
<table width="100%">
	<tr>
		<th>Section</th>
		<th>Equation ID</th>
		<th>Equation</th>
	</tr>
	<tr>
		<td>Resistance</td>
		<td>E-?</td>
		<td>$$\sum R = {{1}\over{{{1}\over{R_1}}+{{1}\over{R_2}}+{{1}\over{R_N}}}}$$</td>
	</tr>
	<tr>
		<td>Voltage</td>
		<td>E-?</td>
		<td>$$\sum V = V_{R1} + V_{R2} + V_{RN}$$</td>
	</tr>
	<tr>
		<td>Current/Amps</td>
		<td>E-?</td>
		<td>$$\sum I = IR_1 + IR_2 + IR_N$$</td>
	</tr>
	<tr>
		<td>Power</td>
		<td>E-?</td>
		<td>$$\sum P  = P_{R1} + P_{R2} + P_{RN}$$</td>
	</tr>
</table>
<h2>Kirchoff's Current Law</h2>
<p>$$\sum I = 0$$</p>


<h2>Current Divider Rule</h2>
<h2>Glossary</h2>
<table width="100%">
	<tr>
		<th>Term</th>
		<th>Definition</th>
	</tr>
	<tr>
		<td><b>Ammeter</b></td>
		<td>A device used for measuring Amperes.</td>
	</tr>
	<tr>
		<td><b>Voltmeter</b></td>
		<td>A device used for measuring Voltage.</td>
	</tr>
	<tr>
		<td><b>Ohmmeter</b></td>
		<td>A device used for measuring Resistance.</td>
	</tr>
</table>
<?php
	include_once 'includes/footer.php';
?>