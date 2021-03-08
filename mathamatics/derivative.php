<?php
	$title = "Derivative";
	require "../header.php";
?>
<h1>The Derivative</h1>
<h2>TLDR</h2>
<p>If you're solving for the derivitive for function by definition: $f'(x) = \lim_{h \rightarrow 0}{{f(x+h)-f(x)}\over {h}}$. But for the normies in the group one must use a few basic rules:</p>
<table>
	<tr>
		<td>Definition of Derivative</td>
		<td>$$m_{tangent} = \lim_{h \rightarrow 0}{{f(x+h)-f(x)}\over {h}} = f'(x)$$</td>
	</tr>
	<tr>
		<td>Derivative of a Constant</td>
		<td>$${{dx}\over{dy}} c = 0$$</td>
	</tr>
	<tr>
		<td>Sum Rule</td>
		<td>$${{d}\over{dx}} f(x)+g(x) ={{d}\over{dx}} f(x) + {{d}\over{dx}}g(x)$$</td>
	</tr>
	<tr>
		<td>Product Rule</td>
		<td>$${{d}\over{dx}}f(x) \cdot g(x) = f'(x)g(x)+f(x)g'(x)$$</td>
	</tr>
	<tr>
		<td>Quotient Rule</td>
		<td>$${{d}\over{dx}} {{f(x)}\over{g(x)}} = {{f'(x)g(x)-f(x)g'(x)}\over{(g(x))^2}}$$</td>
	</tr>
	<tr>
		<td>Power Rule</td>
		<td>$${{d}\over{dx}} x^n = n(x^{n-1})$$</td>
	</tr>
	<tr>
		<td>Constant Rule</td>
		<td>$${{d}\over{dx}} Kf(x) =K{{d}\over{dx}} f(x)$$</td>
	</tr>
	<tr>
		<td>Chain Rule</td>
		<td>$${{d}\over{dx}} f(g(x)) = f'(g(x))\cdot g'(x)$$</td>
	</tr>
</table>
<div class="secSep"></div>
<h2>Implicit Differentiation</h2>
<div class="secSep"></div>
<p>Find ${{dy}\over{dx}}$ where, $x^2 +y^2 +2xy+ 1$.</p>
<table>
	<tr>
		<th>Math</th>
		<th>Explanation</th>
		<th>Reference</th>
	</tr>
	<tr>
		<td>$$2x^2-1 + {{d(y^2)}\over{dx}} + \left($$</td>
		<td></td>
		<td></td>
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
	require "../footer.php";
?>