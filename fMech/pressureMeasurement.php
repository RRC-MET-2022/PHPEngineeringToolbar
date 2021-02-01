<?php
	include_once 'includes/header.php';
?>
<h1>Measurement of Pressure</h1>
<h2>Types of Pressure</h2>
<table>
	<tr>
		<td>Absolute Pressure</td>
		<td>$$p_{abs}$$</td>
		<td>$$p_{abs} = p_{gage} + p_{atm}$$</td>
		<td>Exact Pressure</td>
	</tr>
	<tr>
		<td>Gage Pressure</td>
		<td>$$p_{gage}$$</td>
		<td>$$p_{gage} = p_{abs} - p_{atm}$$</td>
		<td>Atmosphere is zero</td>
	</tr>
	<tr>
		<td>Atmospheric Pressure</td>
		<td>$$p_{atm}$$</td>
		<td>$$p_{atm} = p_{abs} - p_{gage}$$</td>
		<td>Pressure from Atmosphere</td>
	</tr>
</table>
<h2>Pressure-Elevation Relation</h2>
<p>$$\Delta p = \gamma h$$</p>
<p>Where:
	<table>
		<tr><td>$\gamma$ = specific weight</td></tr>
		<tr><td>$h$ = height</td></tr>
	</table>
</p>
<p>
	<img src="img/Figure 3.7.png">
	<table>
		<tr>
			<td>3-4</td>
			<td>Top Force of Submerged Cylinder</td>
			<td>$$F_2 = (p_1 + dp)A$$</td>
			<td>Pressure, Figure 3.7, Geometry</td>
			<td>none</td>
		</tr>
		<tr>
			<td>3-5</td>
			<td>Sum of Forces in vertical direction of Submerged Cylinder</td>
			<td>$$\sum F_v = 0 = F_1 - F_2 - w$$</td>
			<td>Pressure, Figure 3.7, Geometry</td>
			<td>3-6</td>
		</tr>
		<tr>
			<td>3-6</td>
			<td>Top Pressure of Submerged Cylinder</td>
			<td>$$F_2 = (p_1 + dp)A</td>
			<td>Pressure, Figure 3.7, Geometry</td>
			<td>3-5</td>
		</tr>
		<tr><td>3-7</td>
			<td>Top Pressure of Submerged Cylinder</td>
			<td>$$F_2 = (p_1 + dp)A</td>
			<td>Pressure, Figure 3.7, Geometry</td>
			<td>3-5</td>
		</tr>
	</table>
</p>
<h2>Measurement Tools</h2>
<p>
	<table>
		<tr>
			<td>+
				<h4>Manometers:</h4>
				<img src="img/manometer.png">S
			</td>
			<td>
				<h4>Barometers:</h4>
				<img src="img/barometer.svg">
			</td>
			<td>
				<h4>Bourdon tube:</h4>
				<img src="img/bourdon.png">
			</td>
		</tr>
	</table>
</p>
<?php
	include_once 'includes/footer.php';
?>