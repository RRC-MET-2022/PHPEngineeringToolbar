<?php
	include_once 'includes/header.php';
?>
<table>
	<tr>
		<td>Definition of Integral</td>
		<td>$$\int_a^b f(x)dx = \lim_{n \rightarrow \infty} \sum_{i=1}^n f(x_i)\Delta x$$</td>
	</tr>
	<tr>
		<td>Integral of a Constant</td>
		<td>$$\int a dx = ax +C$$</td>
	</tr>
	<tr>
		<td>Integral of a Variable</td>
		<td>$$\int x dx = {{x^2}\over{2}} +C$$</td>
	</tr>
	<tr>
		<td>Sum Rule</td>
		<td>$$\int f(x) + g(x) = \int f(x) dx + \int g(x) dx$$</td>
	</tr>
	<tr>
		<td>Power Rule</td>
		<td>$$\int x^n dx ={{x^{n+1}}\over{n+1}}+C$$</td>
	</tr>
	<tr>
		<td>Product Rule (Integration by parts)</td>
		<td>$$\int f(x)\cdot g(x) = f(x) \int g(x) dx - \int f(x)\left(\int g(x) dx \right) dx$$</td>
	</tr>
</table>

<div class="secSep"></div>
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
</table>
<div class="secSep"></div>
<h2>Glossary</h2>
<div class="secSep"></div>
<table>
	<tr>
		<th>Term</th>
		<th>Definition</th>
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