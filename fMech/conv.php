<?php
	include_once 'includes/header.php';
?>
<H1>Conversion Tables</H1>
<table class="EquationTB">
	<!-- Table Head -->
	<thead>
		<tr class="EqTBHeader">
			<th><h2>Metric</h2></th>
			<th><h2>Input</h2></th>
			<th><h2>Imperial</h2></th>
			<th><h2>Input</h2></th>
			<th><h2>Met- >Imp Factor</h2></th>
			<th><h2>Imp- >Met Factor</h2></th>
		</tr>
	</thead>
	<tbody class="labels">
		<tr>
			<td colspan="6" align="center">
				<label for="mass"><h3>Mass</h3></label>
				<input type="checkbox" name="mass" id="mass" data-toggle = "toggle">
			</td>
		</tr>
	</tbody>
	<tbody class="hide">
		<!-- kg-slugs -->
		<tr>
			<td>Kilograms</td>
			<td><input type="" name=""></td>
			<td>Slugs</td>
			<td><input type="" name=""></td>
			<td>$${{1}\over{14.594}}</td>
			<td>$$14.594$$</td>
		</tr>
	</tbody>
</table>

<?php
	include_once 'includes/footer.php';
?>