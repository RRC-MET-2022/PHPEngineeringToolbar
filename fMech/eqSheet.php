<?php
	$title = "Equation Sheet";
	require "../header.php";
?>
<H1>Fluid Mechanics Equation Sheet</H1>
<table class="EquationTB">
	<!-- Table Head -->
	<thead>
		<tr class="EqTBHeader">
			<th><h2>Equation ID</h2></th>
			<th><h2>Equation Name</h2></th>
			<th><h2>Equation</h2></th>
			<th><h2>Requires</h2></th>
			<th><h2>Extends</h2></th>
		</tr>
	</thead>
	<!-- Chapter 1  -->
	<tbody class="labels">
		<tr>
			<td colspan="5" align="center">
				<label for="Chap1"><h3>Chapter 1 Equations</h3></label>
				<input type="checkbox" name="Chap1" id="Chap1" data-toggle = "toggle">
			</td>
		</tr>
	</tbody>
	<tbody class="hide">
		<tr>
			<td class="EqId" id="EqId">1-1</td>
			<td class="EqNm" id="EqNm">Pressure</td>
			<td class="Equation" id="Equation">$$p = {F \over A}$$</td>
			<td class="EqRe" id="EqRe"><a href="">Force, </a><a href="">Area</a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">1-2</td>
			<td class="EqNm" id="EqNm">Weight-Mass Relationship</td>
			<td class="Equation" id="Equation">$$w = mg$$</td>
			<td class="EqRe" id="EqRe"><a href="">Mass, </a><a href="">Gravity</a></td>
			<td class="EqEx" id="EqEx"><a href="">1-7</a><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">1-4</td>
			<td class="EqNm" id="EqNm">Bulk Modulus</td>
			<td class="Equation" id="Equation">$$E= {{-\Delta p}\over{(\Delta V)/V}}$$</td>
			<td class="EqRe" id="EqRe"><a href="">Pressure, </a><a href="">Volume</a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">1-5</td>
			<td class="EqNm" id="EqNm">Density</td>
			<td class="Equation" id="Equation">$$\rho = {m \over V}$$</td>
			<td class="EqRe" id="EqRe"><a href="">Mass,</a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">1-6</td>
			<td class="EqNm" id="EqNm">Specific Weight</td>
			<td class="Equation" id="Equation">$$\gamma = {w \over V}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">1-7</td>
			<td class="EqNm" id="EqNm">Specific Gravity</td>
			<td class="Equation" id="Equation">$$sg = {{\gamma_{s}}\over{\gamma _{w} @4^\circ C}} = {{\rho_{s}}\over {\rho _{w} @4^\circ C}}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">1-9</td>
			<td class="EqNm" id="EqNm">$\gamma-\rho$ Relation</td>
			<td class="Equation" id="Equation">$$\gamma = \rho g$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
	</tbody>
	<!-- Chapter 2 -->
	<tbody class="labels">
		<tr>
			<td colspan="5" align="center">
				<label for="Chap2"><h3>Chapter 2 Equations</h3></label>
				<input type="checkbox" name="Chap2" id="Chap2" data-toggle = "toggle">
			</td>
		</tr>
	</tbody>
	<tbody class="hide">
		<tr>
			<td class="EqId" id="EqId">2-2</td>
			<td class="EqNm" id="EqNm">Dynamic Viscosity</td>
			<td class="Equation" id="Equation">$$\eta = {{\tau}\over{\Delta v / \Delta y}} = \tau \left({{\Delta y}\over{\Delta v}}\right)$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">2-3</td>
			<td class="EqNm" id="EqNm">Kinematic Viscosity</td>
			<td class="Equation" id="Equation">$$\nu = {\eta \over \rho}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
	</tbody>
	<!-- Chapter 3 -->
	<tbody class="labels">
		<tr>
			<td colspan="5" align="center">
				<label for="Chap3"><h3>Chapter 3 Equations</h3></label>
				<input type="checkbox" name="Chap3" id="Chap3" data-toggle = "toggle">
			</td>
		</tr>
	</tbody>
	<tbody class="hide">
		<tr>
			<td class="EqId" id="EqId">3-2</td>
			<td class="EqNm" id="EqNm">Absolute and Gage Pressure</td>
			<td class="Equation" id="Equation">$$p _{abs} = p _{gage} + p _{atm}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">3-3</td>
			<td class="EqNm" id="EqNm">Pressure-Elevation Relationship</td>
			<td class="Equation" id="Equation">$$\Delta p = \gamma h$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
	</tbody>
	<!-- Chapter 4 -->
	<tbody class="labels">
		<tr>
			<td colspan="5" align="center">
				<label for="Chap4"><h3>Chapter 4 Equations</h3></label>
				<input type="checkbox" name="Chap4" id="Chap4" data-toggle = "toggle">
			</td>
		</tr>
	</tbody>
	<tbody class="hide">
		<tr>
			<td class="EqId" id="EqId">4-2</td>
			<td class="EqNm" id="EqNm">Moment Area Method</td>
			<td class="Equation" id="Equation">$$\overline y = {{A_1y_1+A_2y_2+A_ny_n}\over{A_1+A_2+A_n}}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">4-3</td>
			<td class="EqNm" id="EqNm">Resultant Force on a Rectangular Wall</td>
			<td class="Equation" id="Equation">$$F _{R} = \gamma (h/2)A$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">4-4</td>
			<td class="EqNm" id="EqNm">Resultant Force on a Submerged Plane Area</td>
			<td class="Equation" id="Equation">$$F _{R} = \gamma h _{c}A$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">4-5</td>
			<td class="EqNm" id="EqNm">Location of Center of Pressure</td>
			<td class="Equation" id="Equation">$$L _{p} = L _{c} + {{I_{c}}\over{L _{c}A}}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">4-14</td>
			<td class="EqNm" id="EqNm">Piezometric Head</td>
			<td class="Equation" id="Equation">$$h_{a} = {{p_{a}}\over{\gamma}}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
	</tbody>
	<!-- Chapter 5 -->
	<tbody class="labels">
		<tr>
			<td colspan="5" align="center">
				<label for="Chap5"><h3>Chapter 5 Equations</h3></label>
				<input type="checkbox" name="Chap5" id="Chap5" data-toggle = "toggle">
			</td>
		</tr>
	</tbody>
	<tbody class="hide">
		<tr>
			<td class="EqId" id="EqId">5-1</td>
			<td class="EqNm" id="EqNm">Buoyant Force</td>
			<td class="Equation" id="Equation">$$F _{b} = \gamma _{f} v _{d}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
	</tbody>
	<!-- Chapter 6 -->
	<tbody class="labels">
		<tr>
			<td colspan="5" align="center">
				<label for="Chap6"><h3>Chapter 6 Equations</h3></label>
				<input type="checkbox" name="Chap6" id="Chap6" data-toggle = "toggle">
			</td>
		</tr>
	</tbody>
	<tbody class="hide">
		<tr>
			<td class="EqId" id="EqId">6-1</td>
			<td class="EqNm" id="EqNm">Volume Flow Rate</td>
			<td class="Equation" id="Equation">$$Q = Av$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">6-2</td>
			<td class="EqNm" id="EqNm">Weight Flow Rate</td>
			<td class="Equation" id="Equation">$$W = \gamma Q$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">6-3</td>
			<td class="EqNm" id="EqNm">Mass Flow Rate</td>
			<td class="Equation" id="Equation">$$M = \rho Q$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">6-4</td>
			<td class="EqNm" id="EqNm">Continuity Equation for any Fluid</td>
			<td class="Equation" id="Equation">$$\rho _{1}A_{1}v_{1}=\rho _{2}A_{2}v_{2}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">6-5</td>
			<td class="EqNm" id="EqNm">Continuity Equation for Liquids</td>
			<td class="Equation" id="Equation">$$A_{1}v_{1}=A_{2}v_{2}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">6-9</td>
			<td class="EqNm" id="EqNm">Bernoulli's Equation</td>
			<td class="Equation" id="Equation">$${{p_{1}}\over {\gamma}} + z_{1} + {{v_1^2}\over{2g}} = {{p_{2}}\over {\gamma}} + z_{2} + {{v_2^2}\over{2g}}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">6-16</td>
			<td class="EqNm" id="EqNm">Torricelli's Theorem</td>
			<td class="Equation" id="Equation">$$v_2 = \sqrt{2gh}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">6-26</td>
			<td class="EqNm" id="EqNm">Time Required to Drain a Tank</td>
			<td class="Equation" id="Equation">$$t_2 - t_1 = {{2(A_t/A_j)}\over{\sqrt{2g}}}(h_1^{1/2} - h_2^{1/2})$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
	</tbody>
	<!-- Chapter 7 -->
	<tbody class="labels">
		<tr>
			<td colspan="5" align="center">
				<label for="Chap7"><h3>Chapter 7 Equations</h3></label>
				<input type="checkbox" name="Chap7" id="Chap7" data-toggle = "toggle">
			</td>
		</tr>
	</tbody>
	<tbody class="hide">
		<tr>
			<td class="EqId" id="EqId">7-3</td>
			<td class="EqNm" id="EqNm">General Energy Equation</td>
			<td class="Equation" id="Equation">$${{p_{1}}\over {\gamma}} + z_{1} + {{v_1^2}\over{2g}} + h_A - h_R - h_L= {{p_{2}}\over {\gamma}} + z_{2} + {{v_2^2}\over{2g}}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">7-5</td>
			<td class="EqNm" id="EqNm">Power Added to a Fluid by a Pump</td>
			<td class="Equation" id="Equation">$$P_A = h_A W = h_A \gamma Q$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">7-6</td>
			<td class="EqNm" id="EqNm">Pump Efficiency</td>
			<td class="Equation" id="Equation">$$e_M = {{\text{Power delivered to fluid}}\over {\text{Power put into pump}}} = {{P_A}\over{P_I}}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">7-8</td>
			<td class="EqNm" id="EqNm">Power Removed from a Fluid by a Motor</td>
			<td class="Equation" id="Equation">$$P_R = h_R W = h_R \gamma Q$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">7-9</td>
			<td class="EqNm" id="EqNm">Motor Efficiency</td>
			<td class="Equation" id="Equation">$$e_M = {{\text{Power output from motor}}\over{\text{Power delivered by fluid}}} = {{P_O}\over{P_R}}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
	</tbody>
	<tbody class="labels">
		<tr>
			<td colspan="5" align="center">
				<label for="Chap8"><h3>Chapter 8 Equations</h3></label>
				<input type="checkbox" name="Chap8" id="Chap8" data-toggle = "toggle">
			</td>
		</tr>
	</tbody>
	<tbody class="hide">
		<tr>
			<td class="EqId" id="EqId">8-1</td>
			<td class="EqNm" id="EqNm">Reynolds Number - Circular Sections</td>
			<td class="Equation" id="Equation">$$N_R = {{vD\rho}\over{\eta}} = {{vD}\over{\nu}}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">8-3</td>
			<td class="EqNm" id="EqNm">Darcy's Equation for Energy Loss</td>
			<td class="Equation" id="Equation">$$h_L = f \times {{L}\over{D}} \times {{v^2}\over{2g}}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">8-4</td>
			<td class="EqNm" id="EqNm">Hagen-Poiseuille Equation</td>
			<td class="Equation" id="Equation">$$h_L = {{32\eta Lv}\over{\gamma D^2}}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">8-5</td>
			<td class="EqNm" id="EqNm">Friction Factor for Laminar Flow</td>
			<td class="Equation" id="Equation">$$f = {{64}\over{N_R}}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">8-7</td>
			<td class="EqNm" id="EqNm">Friction Factor for Turbulent Flow</td>
			<td class="Equation" id="Equation">$$f = {{0.25}\over{\left[\log\left({{1}\over{3.7(D/\epsilon)}}\right)+{{5.74}\over{N_R^0.9}}\right]^{2}}}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">8-8</td>
			<td class="EqNm" id="EqNm">Hazen-Williams Formula - U.S. Customary Units</td>
			<td class="Equation" id="Equation">$$v = 1.32C_h R^{0.63} s^{0.54}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">8-9</td>
			<td class="EqNm" id="EqNm">Hazen-Williams Formula - SI Units</td>
			<td class="Equation" id="Equation">$$v = 0.85C_h R^{0.63} s^{0.54}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
	</tbody>
	<tbody class="labels">
		<tr>
			<td colspan="5" align="center">
				<label for="Chap9"><h3>Chapter 9 Equations</h3></label>
				<input type="checkbox" name="Chap9" id="Chap9" data-toggle = "toggle">
			</td>
		</tr>
	</tbody>
	<tbody class="hide">
		<tr>
			<td class="EqId" id="EqId">9-5</td>
			<td class="EqNm" id="EqNm">Hydraulic Radius - Closed Noncircular Sections</td>
			<td class="Equation" id="Equation">$$R = {{A}\over{WP}} = {{\text{area}}\over{\text{wetted perimeter}}}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">9-6</td>
			<td class="EqNm" id="EqNm">Reynolds Number for Noncircular Sections</td>
			<td class="Equation" id="Equation">$$N_R = {{\nu(4R)\rho}\over{\eta}} = {{\nu(4R)}\over{v}}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
		<tr>
			<td class="EqId" id="EqId">9-7</td>
			<td class="EqNm" id="EqNm">Darcy's Equation for Noncircular Sections</td>
			<td class="Equation" id="Equation">$$h_L = f {{L}\over{4R}} {{v^2}\over{2g}}$$</td>
			<td class="EqRe" id="EqRe"><a href=""></a></td>
			<td class="EqEx" id="EqEx"><a href=""></a></td>
		</tr>
	</tbody>
</table>
<?php
	require "../footer.php";
?>