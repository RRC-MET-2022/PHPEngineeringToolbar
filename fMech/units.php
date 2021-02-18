<?php
	include_once 'includes/header.php';
?>
<h1>Units</h1>
<div class="mainSep"></div>
<h2>Common Units Table</h2>
<div class="secSep"></div>
<table width="100%">
	<tr>
		<th>Unit Type</th>
		<th>Metric Units</th>
		<th>Imperial Units</th>
	</tr>
	<tr>
		<td>Length</td>
		<td>Meter(m)</td>
		<td><ol>
			<li>foot (ft)</li>
			<li>inch (in)</li>
			<li>mile (mi)</li>
		</ol></td>
	</tr>
	<tr>
		<td>Time</td>
		<td colspan="2"><ol>
			<li>second (s)</li>
			<li>hour (h)</li>
			<li>minute (min)</li>
		</ol></td>
	</tr>
	<tr>
		<td>Mass</td>
		<td>Kilogram = $N\cdot {{s^2}\over{m}}$</td>
		<td>Slug = $lb\cdot {{s^2}\over{ft}}$</td>
	</tr>
	<tr>
		<td>Force</td>
		<td>Newton (N) = $kg \cdot {{m}\over{s^2}}$</td>
		<td>Pound (lb)</td>
	</tr>
	<tr>
		<td>Pressure</td>
		<td>Pascal (Pa) = ${{N}\over{m^2}}$</td>
		<td>Pounds per Square Inch (psi) = ${{lb}\over{in^2}}$</td>
	</tr>
	<tr>
		<td>Volume</td>
		<td><ol>
			<li>$m^3$</li>
			<li>liter (L) = $0.001 m^3$</li>
		</ol></td>
		<td><ol>
			<li>$ft^3$</li>
			<li>gallon (gal) = 4.54609L</li>
		</ol></td>
	</tr>
	<tr>
		<td>Area</td>
		<td>$m^2$</td>
		<td>$ft^2$</td>
	</tr>
	<tr>
		<td>Volume Flow Rate (Q)</td>
		<td>${{m^3}\over{s}}$</td>
		<td>${{ft^3}\over{s}}$</td>
	</tr>
	<tr>
		<td>Weight Flow Rate (W)</td>
		<td>${{N}\over{s}}$</td>
		<td>${{lb}\over{s}}$</td>
	</tr>
	<tr>
		<td>Mass Flow Rate (M)</td>
		<td>${{kg}\over{s}}$</td>
		<td>${{slugs}\over{s}}$</td>
	</tr>
	<tr>
		<td>Specific Weight ($\gamma$)</td>
		<td>${{N}\over{m^3}} = {{kg}\over{m^2}}\cdot s^2$</td>
		<td>${{lb}\over{ft^3}}$</td>
	</tr>
	<tr>
		<td>Density ($\rho$)</td>
		<td>${{kg}\over{m^3}} = {{N\cdot s^2}\over{m^4}}$</td>
		<td>${{slugs}\over{ft^3}}$</td>
	</tr>
</table>
<div class="secSep"></div>
<h2>SI Unit Prefixes</h2>
<div class="secSep"></div>
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
		<td>$\mu$</td>
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
<div class="secSep"></div>
<h2>Pound Force vs Pound Weight</h2>
<div class="secSep"></div>
<table width="100%">
	<tr>
		<th>Pound Force</th>
		<th>Pound Weight</th>
	</tr>
	<tr>
		<td>$$F = ma$$</td>
		<td>$$m = {{F}\over{a}}$$</td>
	</tr>
</table>
<table>
<!-- Table K.1 (Unit Conversions IMP->MET) -->
</table>
<table>
	<!-- Table K.2 -->
</table>


<?php
	include_once 'includes/footer.php';
?>