<?php
	include_once 'includes/header.php';
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
<!-- <p>We basically want to find the slope of the graph at any point mathimatically.</p>
<h2>The Nitty Gritty</h2>
<h3>Slope</h3>
<p>
	The essence of a derivative is finding the slope of a function at any point on the graph. However nerdy or mundane that sentence seems, this stuff is revolutionary. And by revolutionary everyone in data science, the engineering crowd, people who look at graphs, about two of you who use excel in a weird way and one guy by the name of Isaac Newton. 
	Now we could in theory just find the slope on the graph by measuring it with a tape measure and calling it a day. If your functions are linear, sure you can quit there and never worry about why this theory can overthrow governments. But let's say we yeet on of these new fangled things into the equation, like $x^2$ now you could in theory do the same thing again. Now I can make you look like a fool and it's easy bro: just use the power rule and boom, you have the tangent anywhere on the graph.
	
	To measure slope one must find the difference in $y$ or $\Delta y = y_2 - y_1$ and divide that sucker by the difference in $x$ or $\Delta x = x_2-x_1$ or in mathmatical function:$m = {{y_2-y_1}\over{x_2-x_1}} = {{\Delta y}\over{\Delta x}} = {{\text{rise}}\over{\text{run}}}$.
</p>
<h3>Derivative Explaination</h3>
<p>
	Now that we know the measuring method of finding slope. Let make it more complex. Since we need to find the point at any area on the graph, we need to take the average over a section of the graph so let's use an example: $x^2 + 1$. Now just by itself, we really can't use that measuring technique this time. Alright get an average of it from 0-2: So looking at the graph I know that the slope at 0 is 0 since it is a horizontal line. Now to $y=1$ using a ruler, we can say this is about 2. Finally at $y=2$ just using some cybornetic upgrades I can say that the slope is 4. So for every increase of 1  in x $x$ we get a slope that $2x$ more. Well we now have a solution and found the derivative of $x^2 + 1$ which is $2x$. Nice we are done. Calc you lator! 
</p>
<h3>Derivative Definition</h3>
<p>
	I hear that you want a rule or a method of doing this a but better than estimating the curves all day. I would gladly take that jobs anyday, but ok you asked. Let's theoretical. Lets imagine a point on the graph that the equation touches: $p_1 = \{x,y\}$. Now lets use that imagination to think of a point extremely close to point 1. We will say it is h away from the original point in the x direction. $p_2 = \{x+h, ?\}$. That question mark now needs an algebraic replacement. Now if you think way back into the past, you might remeber something from a archaic class named algebra, that we call equations sometimes by functions, well now we have a dilma that can be solved by this exact thing. Since we can't represent y in point 2 by just saying it's h away from the y in point 1. So we need something to represent this. 
	$f(x)$ can represent 
</p> -->
<?php
	include_once 'includes/footer.php';
?>