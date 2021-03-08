<?php
	$title = "Mathamatical Reference";
	require "../header.php";
?>
<table class="EquationTB" width="100%">
	<thead>
		<tr EqTBHeadeder>
			<th>Equation ID</th>
			<th>Name of Equation</th>
			<th>Equation</th>
			<th>Requires</th>
			<th>Extends</th>
		</tr>
	</thead>
	<tbody class="labels">
		<tr>
			<td colspan="5" align="center">
			<label for="calc"><h3>Calculus</h3></label>
			<input type="checkbox" name="calc" id="calc" data-toggle = "toggle">
			</td>
		</tr>
	</tbody>
	<tbody class="hide">
		<tr>
			<td>C-1</td>
			<td>Power Rule</td>
			<td>$${{d}\over{dx}} x^n = n(x^{n-1})$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>C-2</td>
			<td>Product Rule</td>
			<td>$${{d}\over{dx}}f(x) \cdot g(x) = f'(x)g(x)+f(x)g'(x)$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>C-3</td>
			<td>Quotient Rule</td>
			<td>$${{d}\over{dx}} {{f(x)}\over{g(x)}} = {{f'(x)g(x)-f(x)g'(x)}\over{(g(x))^2}}$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>C-4</td>
			<td>Sum Rule</td>
			<td>$${{d}\over{dx}} f(x)+g(x) ={{d}\over{dx}} f(x) + {{d}\over{dx}}g(x)$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>C-5</td>
			<td>Constant Rule</td>
			<td>$${{d}\over{dx}} Kf(x) =K{{d}\over{dx}} f(x)$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>C-5</td>
			<td>Chain Rule</td>
			<td>$${{d}\over{dx}} f(g(x)) = f'(g(x))\cdot g'(x)$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>C-5</td>
			<td>Definition of Derivative</td>
			<td>$$m_{tangent} = \lim_{h \rightarrow 0}{{f(x+h)-f(x)}\over {h}} = f'(x)$$</td>
			<td></td>
			<td></td>
		</tr>
	</tbody>
</table>
<?php
	require "../footer.php";
?>