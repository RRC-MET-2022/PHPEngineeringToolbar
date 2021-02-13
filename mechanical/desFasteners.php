<?php
	include_once 'includes/header.php';
?>
<H1>Fasteners</H1>
<div class="secSep"></div>
<h2>Calculating For Dean</h2>
<div class="secSep"></div>
<table>
	<tr>
		<th>Math</th>
		<th>Explanation</th>
		<th>References</th>
	</tr>
	<tr>
		<td>$$P_{init} = \sum P$$</td>
		<td>Add all of the initial loads together.</td>
		<td>Should be given in the question.</td>
	</tr>
	<tr>
		<td>$$P_{pre} =  P_{init} \times SF$$</td>
		<td>Muliply the Initial load with the safety factor.</td>
		<td>Given value (assume SF = 2 for general)</td>
	</tr>
	<tr>
		<td>$$F_{proof} =A_s \times \sigma _{proof}$$</td>
		<td>To find $F_{proof}$ we need to multiply the tensile stress area by the </td>
	</tr>
</table>



<div class="mainSep"></div>
<h1>Reference</h1>
<div class="secSep"></div>
<h2>Categories</h2>
<div class="secSep"></div>
<table>
	<tr>
		<th>Removable</th>
		<th>Semi-permanent</th>
		<th>Permanent</th>
		<th>Welded</th>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
<h2>Bolts or Screws?</h2>
<div class="secSep"></div>
<p>Bolts needs a nut, screws don't. </p>
<div class="secSep"></div>
<h2>Drive Types</h2>
<div class="secSep"></div>
<table width="100%">
	<thead><tr>
		<th>Screw Drive Family</th>
		<th>Head On View</th>
		<th>Orthographic View</th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
	</tr></thead>
	<tbody><tr style="height: 15px;"></tr></tbody>
	<tbody class="labels"><tr>
		<td align="center">
			<label for="cross"><h4>Slotted</h4></label>
			<input type="checkbox" name="cross" id="cross" data-toggle = "toggle">
		</td>
		<td><img src="img/slotHO.png" style="width: 100px; height: 100px;"></td>
		<td><img src="img/slotO.png" style="width: 100px; height: 100px;"></td>
	</tr></tbody>
	<tbody class="hidden">
		<tr>			
			<th>Blade width (mm)</th>
			<th>Blade width (in)</th>
			<th>Screw size</th>
		</tr>
		<tr>
			<td>2.4</td>
			<td>$$\stackrel{3}{}\!\!\unicode{x2215}_{\!\unicode{x202f}32}$$</td>
			<td>0-1</td>
		</tr>
		<tr>
			<td>3.2</td>
			<td>$$\stackrel{1}{}\!\!\unicode{x2215}_{\!\unicode{x202f}8}$$</td>
			<td>2</td>
		</tr>
	</tbody>
</table>
<?php
	include_once 'includes/footer.php';
?>