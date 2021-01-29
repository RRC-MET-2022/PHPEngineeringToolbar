<?php
	include_once 'includes/header.php';
?>
<h1>Units and Fluid basics</h1>
<h2>SI units</h2>
<table width="38%">
	<tr>
		<th>Type</th>
		<th>Name</th>
		<th>Proof</th>
	</tr>
	<tr>
		<td colspan="3"><h1>SI System</h1></td>
	</tr>
	<tr>
		<td>Length</td>
		<td>meter (m)</td>
		<td>speed of light in ${{1}\over{299792458}}$ of a second</td>
	</tr>
	<tr>
		<td>Time</td>
		<td>second (s)</td>
		<td></td>
	</tr>
	<tr>
		<td>Mass</td>
		<td>kilogram (kg)</td>
		<td>$$N\cdot s^2/m$$</td>
	</tr>
	<tr>
		<td>Force</td>
		<td>newton (N)</td>
		<td>$$kg\cdot m/s^2$$</td>
	</tr>
	<tr>
		<td>Pressure</td>
		<td>pascal (Pa)</td>
		<td>$$N/m^3$$</td>
	</tr>
	<tr>
		<td colspan="3"><h1>US Customary</h1></td>
	</tr>
	<tr>
		<td>Length</td>
		<td>foot (ft)</td>
		<td></td>
	</tr>
	<tr>
		<td>Time</td>
		<td>second (s)</td>
		<td></td>
	</tr>
	<tr>
		<td>Mass</td>
		<td>slug</td>
		<td>$$lb-s^2/ft$$</td>
	</tr>
	<tr>
		<td>Force</td>
		<td>pound (lb)</td>
		<td>$$$$</td>
	</tr>
	<tr>
		<td>Pressure</td>
		<td>psf (N)</td>
		<td>$$lb/ft^2$$</td>
	</tr>
</table>
<h2>SI Unit Prefixes</h2>
<table>
	<tr>
		<th>Prefix</th>
		<th>SI symbol</th>
		<th>Factor of 10</th>
		<th>Full Number</th>
	</tr>
	<tr>
		<td>terra</td>
		<td>T</td>
		<td>$$10^{12}$$</td>
		<td>1 000 000 000 000</td>
	</tr>
	<tr>
		<td>giga</td>
		<td>G</td>
		<td>$$10^{9}$$</td>
		<td>1 000 000 000</td>
	</tr>
	<tr>
		<td>mega</td>
		<td>M</td>
		<td>$$10^{6}$$</td>
		<td>1 000 000</td>
	</tr>
	<tr>
		<td>kilo</td>
		<td>k</td>
		<td>$$10^{3}$$</td>
		<td>1 000</td>
	</tr>
	<tr>
		<td>milli</td>
		<td>m</td>
		<td>$$10^{-3}$$</td>
		<td>0.001</td>
	</tr>
	<tr>
		<td>micro</td>
		<td>$$\mu$$</td>
		<td>$$10^{-6}$$</td>
		<td>0.000 001</td>
	</tr>
	<tr>
		<td>nano</td>
		<td>n</td>
		<td>$$10^{-9}$$</td>
		<td>0.000 000 001</td>
	</tr>
	<tr>
		<td>pico</td>
		<td>p</td>
		<td>$$10^{-12}$$</td>
		<td>0.000 000 000 001</td>
	</tr>
</table>
<table>
	<tr>
		<th>Pound Force</th>
		<th>Pound Weight</th>
	</tr>
	<tr>
		<td>$$F = ma$$</td>
		<td>$$m = {{F}\over{a}}$$</td>
	</tr>
</table>
<?php
	include_once 'includes/footer.php';
?>