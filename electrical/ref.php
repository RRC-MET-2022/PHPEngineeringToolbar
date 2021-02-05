<?php
	include_once 'includes/header.php';
?>
<h1>Electrical Reference</h1>
<p></p>
<h2>Equation Table</h2>
<table>
	<tr>
		<th>Equation ID</th>
		<th>Equation Name</th>
		<th>Equation</th>
		<th>Requires</th>
		<th>Extends</th>
	</tr>
	<tr>
		<td>E-1</td>
		<td>Specific Resistance</td>
		<td>$$\rho = R {{A}\over{l}}$$</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>E-2</td>
		<td>Temperature Resistance Relationship</td>
		<td>$$R = R_{ref} [1+\alpha(T-T_{ref})]$$</td>
		<td>Reference Resistance, temp coefficient,</td>
		<td></td>
	</tr>
	<tr>
		<td>E-3</td>
		<td>Circular Wire Area Formula</td>
		<td>$$A = d^2$$</td>
		<td></td>
		<td></td>
	</tr>
</table>
<h2>Resistivity Table</h2>
<table width="100%">
	<tr>
		<th>Material</th>
		<th>$\rho \left({{\text{CM}\cdot \Omega}\over{\text{ft}}}\right)$ at 20$^{\circ}$C</th>
	</tr>
	<tr>
		<td>Silver (Ag)</td>
		<td>9.9</td>
	</tr>
	<tr>
		<td>Copper (Cu)</td>
		<td>10.37</td>
	</tr>
	<tr>
		<td>Gold (Au)</td>
		<td>14.7</td>
	</tr>
	<tr>
		<td>Aluminum (Al)</td>
		<td>17.0</td>
	</tr>
	<tr>
		<td>Tungsten (W)</td>
		<td>33.0</td>
	</tr>
	<tr>
		<td>Nickel (Ni)</td>
		<td>47.0</td>
	</tr>
	<tr>
		<td>Iron (Fe)</td>
		<td>74.0</td>
	</tr>
	<tr>
		<td>Constantan (NiCu)</td>
		<td>295.0</td>
	</tr>
	<tr>
		<td>Nichrome (NiCr)</td>
		<td>600.0</td>
	</tr>
	<tr>
		<td>Calorite(FeOAlSi)</td>
		<td>720.0</td>
	</tr>
	<tr>
		<td>Carbon (C)</td>
		<td>21000.0</td>
	</tr>
</table>
<h2>Temperature Coefficient of Resistance (20$^{\circ}$C)</h2>
<table width="100%">
	<tr>
		<th>Material</th>
		<th>$\alpha$</th>
	</tr>
	<tr>
		<td>Silver (Ag)</td>
		<td>0.0038</td>
	</tr>
	<tr>
		<td>Copper (Cu)</td>
		<td>0.00393</td>
	</tr>
	<tr>
		<td>Gold (Au)</td>
		<td>0.0034</td>
	</tr>
	<tr>
		<td>Aluminum (Al)</td>
		<td>0.00391</td>
	</tr>
	<tr>
		<td>Tungsten (W)</td>
		<td>0.004403</td>
	</tr>
	<tr>
		<td>Nickel (Ni)</td>
		<td>0.006</td>
	</tr>
	<tr>
		<td>Iron (Fe)</td>
		<td>0.0055</td>
	</tr>
	<tr>
		<td>Constantan (NiCu)</td>
		<td>0.00008</td>
	</tr>
	<tr>
		<td>Nichrome (NiCr)</td>
		<td>0.00044</td>
	</tr>
	<tr>
		<td>Carbon (C)</td>
		<td>-0.0005</td>
	</tr>
</table>
<h2>Insulation Codes</h2>
<table>
	<tr>
		<th>Code</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>R</td>
		<td>Rubber</td>
	</tr>
	<tr>
		<td>H</td>
		<td>Heat</td>
	</tr>
	<tr>
		<td>HH</td>
		<td>High Heat</td>
	</tr>
	<tr>
		<td>A</td>
		<td>Asbestos</td>
	</tr>
	<tr>
		<td>T</td>
		<td>Thermoplastic</td>
	</tr>
	<tr>
		<td>M</td>
		<td>Oil Resistant</td>
	</tr>
	<tr>
		<td>UF</td>
		<td>Underground Feeder</td>
	</tr>
	<tr>
		<td>C</td>
		<td>Corrosion Resistant</td>
	</tr>
</table>
<h2>AWG Table</h2>
<table width="100%">
	<tr>
		<th>AWG#</th>
		<th>&#216 inches</th>
		<th>&#216 mm</th>
		<th>Area (kcmil)</th>
		<th>Area (mm$^2$)</th>
	</tr>
	<tr>
		<td>0000 (4/0)</td>
		<td>0.4600</td>
		<td>11.6840</td>
		<td>211.6000</td>
		<td>107.2193</td>
	</tr>
	<tr>
		<td>000 (3/0)</td>
		<td>0.4096</td>
		<td>10.4049</td>
		<td>167.8064</td>
		<td>85.0288</td>
	</tr>
	<tr>
		<td>00 (2/0)</td>
		<td>0.3648</td>
		<td>9.2658</td>
		<td>133.0765</td>
		<td>67.4309</td>
	</tr>
	<tr>
		<td>0 (1/0)</td>
		<td>0.3249</td>
		<td>8.2515</td>
		<td>105.5345</td>
		<td>53.4751</td>
	</tr>
	<tr>
		<td>1</td>
		<td>0.2893</td>
		<td>7.3481</td>
		<td>83.6927</td>
		<td>42.4077</td>
	</tr>
	<tr>
		<td>2</td>
		<td>0.2576</td>
		<td>6.5437</td>
		<td>66.3713</td>
		<td>33.6308</td>
	</tr>
	<tr>
		<td>4</td>
		<td>0.2043</td>
		<td>5.1894</td>
		<td>41.7413</td>
		<td>21.1506</td>
	</tr>
	<tr>
		<td>6</td>
		<td>0.1620</td>
		<td>4.1154</td>
		<td>26.2514</td>
		<td>13.3018</td>
	</tr>
	<tr>
		<td>8</td>
		<td>0.1285</td>
		<td>3.2636</td>
		<td>16.5097</td>
		<td>8.3656</td>
	</tr>
	<tr>
		<td>10</td>
		<td>0.1019</td>
		<td>2.5882</td>
		<td>10.830</td>
		<td>5.2612</td>
	</tr>
	<tr>
		<td>12</td>
		<td>0.0808</td>
		<td>2.0525</td>
		<td>6.5299</td>
		<td>3.3088</td>
	</tr>
	<tr>
		<td>14</td>
		<td>0.0641</td>
		<td>1.6277</td>
		<td>4.1067</td>
		<td>2.0809</td>
	</tr>
	<tr>
		<td>16</td>
		<td>0.0508</td>
		<td>1.2908</td>
		<td>2.5827</td>
		<td>1.3087</td>
	</tr>
	<tr>
		<td>18</td>
		<td>0.0403</td>
		<td>1.0237</td>
		<td>1.6243</td>
		<td>0.8230</td>
	</tr>
</table>
<h2>Glossary</h2>
<table>
	<tr>
		<th>Term</th>
		<th>Definition</th>
	</tr>
	<tr>
		<td><b>Coulomb</b></td>
		<td>An SI unit for a measurement of electrical charge. Also equal to 1 Ampere in 1 second or 1 Farad over 1 Volt or $6.242\times 10^{18}$ protons.</td>
	</tr>
	<tr>
		<td><b>Charge</b></td>
		<td>The physical property for matter to experience a force in an electromagnetic field.</td>
	</tr>
	<tr>
		<td><b>Cell</b></td>
		<td>A power unit that produces electricity.</td>
	</tr>
	<tr>
		<td><b>Battery</b></td>
		<td>When cells are combined to create a network that provides electricity to a ciruit.</td>
	</tr>
	<tr>
		<td><b>Primary Cell</b></td>
		<td>A non-rechargable battery.</td>
	</tr>
	<tr>
		<td><b>Secondary Cell</b></td>
		<td>A rechargeable battery.</td>
	</tr>
	<tr>
		<td><b>Amp-hour (Ah)</b></td>
		<td>The capacity of a battery.</td>
	</tr>
	<tr>
		<td><b>Switch</b></td>
		<td>A electrical device that opens or closes a circuit.</td>
	</tr>
	<tr>
		<td><b>Conductor</b></td>
		<td>A material that can carry current.</td>
	</tr>
	<tr>
		<td><b>Load</b></td>
		<td>A device that converts power (electricity) to work (energy)</td>
	</tr>
	<tr>
		<td><b>Closed Circuit</b></td>
		<td>A circuit that has a completed path.</td>
	</tr>
	<tr>
		<td><b>Open Circuit</b></td>
		<td>A circuit that has no completed path.</td>
	</tr>
	<tr>
		<td><b>Schematic</b></td>
		<td>A drawing representing a circuit using symbols.</td>
	</tr>
	<tr>
		<td><b>Insulator</b></td>
		<td>A material that resists electrical current.</td>
	</tr>
</table>
<?php
	include_once 'includes/footer.php';
?>