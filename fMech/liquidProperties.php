<?php
	include_once 'includes/header.php';
?>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<!-- Parent Slideshow Div -->
<div class="slideshow-container">
	<!-- Metric Table -->
	<div class="mySlides fade">
		<H1>Metric Liquid Properties Sheet</H1>
		<table class="MetricTB" width="100%" style="border-collapse: collapse; border: 1px solid black; text-align: center;">
			<!-- Table Head -->
			<thead>
				<tr class="MetricTBHeader">
					<th><h2>Liquid Name</h2></th>
					<th><h2>Temperature</h2><p>$^\circ C$</p></th>
					<th><h2>Specific Gravity</h2><p>$sg$</p></th>
					<th><h2>Specific Weight</h2><p>$\gamma$</p><p>($kN/m^3$)</p></th>
					<th><h2>Density</h2><p>$\rho$</p><p>($kg/m^3$)</p></th>
					<th><h2>Dynamic Viscosity</h2><p>$\eta$</p><p>($Pa\cdot s$)</p></th>
					<th><h2>Kinematic Viscosity</h2><p>$\nu$</p><p>($m^2/s$)</p></th>
				</tr>
			</thead>
			<!-- Acetone -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="Acetone"><h3>Acetone</h3></label>
						<input type="checkbox" name="Acetone" id="Acetone" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.787</h3></td>
					<!-- Specific Weight -->
					<td><h3>7.72</h3></td>
					<!-- Density -->
					<td><h3>787</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$3.16 \times 10^{-4}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$4.02 \times 10^{-7}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Ethyl Alcohol -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td><h3>Alcohol, ethyl</h3></td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.787</h3></td>
					<!-- Specific Weight -->
					<td><h3>7.72</h3></td>
					<!-- Density -->
					<td><h3>787</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$1.00 \times 10^{-3}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$1.27 \times 10^{-6}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Methyl Alcohol -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="MethAlc"><h3>Alcohol, Methyl</h3></label>
						<input type="checkbox" name="MethAlc" id="MethAlc" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.789</h3></td>
					<!-- Specific Weight -->
					<td><h3>7.74</h3></td>
					<!-- Density -->
					<td><h3>789</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$5.60 \times 10^{-4}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$7.10 \times 10^{-7}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Propyl Alcohol -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="PropAlc"><h3>Alchohol, propyl</h3></label>
						<input type="checkbox" name="PropAlc" id="PropAlc" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.802</h3></td>
					<!-- Specific Weight -->
					<td><h3>7.87</h3></td>
					<!-- Density -->
					<td><h3>802</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$1.92 \times 10^{-3}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$2.39 \times 10^{-6}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Aqua ammonia (25%) -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="AqAm"><h3>Aqua ammonia (25%)</h3></label>
						<input type="checkbox" name="AqAm" id="AqAm" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.910</h3></td>
					<!-- Specific Weight -->
					<td><h3>8.93</h3></td>
					<!-- Density -->
					<td><h3>910</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>~$9 \times 10^{-4}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$? \times 10^{-}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Benzene -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for=""><h3>Benzene</h3></label>
						<input type="checkbox" name="" id="" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.876</h3></td>
					<!-- Specific Weight -->
					<td><h3>8.59</h3></td>
					<!-- Density -->
					<td><h3>876</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$6.03 \times 10^{-4}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$6.88 \times 10^{-7}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Carbon Tetrachloride -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="CTet"><h3>Carbon Tetrachloride</h3></label>
						<input type="checkbox" name="CTet" id="CTet" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>1.590</h3></td>
					<!-- Specific Weight -->
					<td><h3>15.60</h3></td>
					<!-- Density -->
					<td><h3>1590</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$9.10 \times 10^{-4}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$5.72 \times 10^{-7}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Castor Oil -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="COil"><h3>Castor Oil</h3></label>
						<input type="checkbox" name="COil" id="COil" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.960</h3></td>
					<!-- Specific Weight -->
					<td><h3>9.42</h3></td>
					<!-- Density -->
					<td><h3>960</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$6.51 \times 10^{-1}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$1.62 \times 10^{-4}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Ethylene glycol -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="EthGly"><h3>Ethylene Glycol</h3></label>
						<input type="checkbox" name="EthGly" id="EthGly" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>1.100</h3></td>
					<!-- Specific Weight -->
					<td><h3>10.79</h3></td>
					<!-- Density -->
					<td><h3>1100</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$1.62 \times 10^{-2}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$1.47 \times 10^{-5}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Medium Fuel Oil -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="MedFOil"><h3>Fuel Oil, Medium</h3></label>
						<input type="checkbox" name="MedFOil" id="MedFOil" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.852</h3></td>
					<!-- Specific Weight -->
					<td><h3>8.36</h3></td>
					<!-- Density -->
					<td><h3>852</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$2.99 \times 10^{-3}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$3.51 \times 10^{-6}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Heavy Fuel Oil -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="HevFOil"><h3>Fuel Oil, Heavy</h3></label>
						<input type="checkbox" name="HevFOil" id="HevFOil" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.906</h3></td>
					<!-- Specific Weight -->
					<td><h3>8.89</h3></td>
					<!-- Density -->
					<td><h3>906</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$1.07 \times 10^{-1}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$1.18 \times 10^{-4}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Gasoline -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="Gas"><h3>Gasoline</h3></label>
						<input type="checkbox" name="Gas" id="Gas" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.68</h3></td>
					<!-- Specific Weight -->
					<td><h3>6.67</h3></td>
					<!-- Density -->
					<td><h3>680</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$2.87 \times 10^{-4}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$4.22 \times 10^{-7}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Glycerin -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="Gly"><h3>Glycerin</h3></label>
						<input type="checkbox" name="Gly" id="Gly" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>1.258</h3></td>
					<!-- Specific Weight -->
					<td><h3>12.34</h3></td>
					<!-- Density -->
					<td><h3>1258</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$9.60 \times 10^{-}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$7.63 \times 10^{-}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Kerosene -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="Kerosene"><h3>Kerosene</h3></label>
						<input type="checkbox" name="Kerosene" id="Kerosene" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.823</h3></td>
					<!-- Specific Weight -->
					<td><h3>8.07</h3></td>
					<!-- Density -->
					<td><h3>8.23</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$1.64 \times 10^{-3}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$1.99 \times 10^{-6}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Linseed Oil -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="LOil"><h3>Linseed Oil</h3></label>
						<input type="checkbox" name="LOil" id="LOil" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.930</h3></td>
					<!-- Specific Weight -->
					<td><h3>9.12</h3></td>
					<!-- Density -->
					<td><h3>930</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$3.31 \times 10^{-2}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$3.56 \times 10^{-5}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Mercury -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="Hg"><h3>Mercury</h3></label>
						<input type="checkbox" name="Hg" id="Hg" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>13.54</h3></td>
					<!-- Specific Weight -->
					<td><h3>132.8</h3></td>
					<!-- Density -->
					<td><h3>13540</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$1.53 \times 10^{-3}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$1.13 \times 10^{-7}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Propane -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="Prop"><h3>Propane</h3></label>
						<input type="checkbox" name="Prop" id="Prop" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.495</h3></td>
					<!-- Specific Weight -->
					<td><h3>4.86</h3></td>
					<!-- Density -->
					<td><h3>495</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$1.10 \times 10^{-4}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$2.22 \times 10^{-7}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Turpentine -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="Turp"><h3>Turpentine</h3></label>
						<input type="checkbox" name="Turp" id="Turp" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.870</h3></td>
					<!-- Specific Weight -->
					<td><h3>8.53</h3></td>
					<!-- Density -->
					<td><h3>870</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$1.37 \times 10^{-3}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$1.00 \times 10^{-6}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Water -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="Water"><h3>Water</h3></label>
						<input type="checkbox" name="Water" id="Water" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>1.00</h3></td>
					<!-- Specific Weight -->
					<td><h3>9.78</h3></td>
					<!-- Density -->
					<td><h3>997</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$8.91 \times 10^{-4}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$8.94 \times 10^{-7}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<!-- 0 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>0</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.81</td>
					<!-- Density -->
					<td>1000</td>
					<!-- Dynamic Viscosity -->
					<td>$1.75 \times 10^{-3}$</td>
					<!-- Kinematic Viscosity -->
					<td>$1.75 \times 10^{-6}$</td>
				</tr>
				<!-- 5 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>5</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.81</td>
					<!-- Density -->
					<td>1000</td>
					<!-- Dynamic Viscosity -->
					<td>$1.52 \times 10^{-3}$</td>
					<!-- Kinematic Viscosity -->
					<td>$1.52 \times 10^{-6}$</td>
				</tr>
				<!-- 10 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>10</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.81</td>
					<!-- Density -->
					<td>1000</td>
					<!-- Dynamic Viscosity -->
					<td>$1.30 \times 10^{-3}$</td>
					<!-- Kinematic Viscosity -->
					<td>$1.30 \times 10^{-6}$</td>
				</tr>
				<!-- 15 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>15</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.81</td>
					<!-- Density -->
					<td>1000</td>
					<!-- Dynamic Viscosity -->
					<td>$1.15 \times 10^{-3}$</td>
					<!-- Kinematic Viscosity -->
					<td>$1.15 \times 10^{-6}$</td>
				</tr>
				<!-- 20 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>20</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.79</td>
					<!-- Density -->
					<td>998</td>
					<!-- Dynamic Viscosity -->
					<td>$1.02 \times 10^{-3}$</td>
					<!-- Kinematic Viscosity -->
					<td>$1.02 \times 10^{-6}$</td>
				</tr>
				<!-- 25 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>25</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.78</td>
					<!-- Density -->
					<td>997</td>
					<!-- Dynamic Viscosity -->
					<td>$8.91 \times 10^{-4}$</td>
					<!-- Kinematic Viscosity -->
					<td>$8.94 \times 10^{-7}$</td>
				</tr>
				<!-- 30 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>30</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.77</td>
					<!-- Density -->
					<td>996</td>
					<!-- Dynamic Viscosity -->
					<td>$8.00 \times 10^{-4}$</td>
					<!-- Kinematic Viscosity -->
					<td>$8.03 \times 10^{-7}$</td>
				</tr>
				<!-- 35 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>35</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.75</td>
					<!-- Density -->
					<td>994</td>
					<!-- Dynamic Viscosity -->
					<td>$7.18 \times 10^{-4}$</td>
					<!-- Kinematic Viscosity -->
					<td>$7.22 \times 10^{-7}$</td>
				</tr>
				<!-- 40 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>40</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.73</td>
					<!-- Density -->
					<td>992</td>
					<!-- Dynamic Viscosity -->
					<td>$6.51 \times 10^{-4}$</td>
					<!-- Kinematic Viscosity -->
					<td>$6.56 \times 10^{-7}$</td>
				</tr>
				<!-- 45 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>45</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.71</td>
					<!-- Density -->
					<td>990</td>
					<!-- Dynamic Viscosity -->
					<td>$5.94 \times 10^{-4}$</td>
					<!-- Kinematic Viscosity -->
					<td>$6.00 \times 10^{-7}$</td>
				</tr>
				<!-- 50 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>50</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.69</td>
					<!-- Density -->
					<td>988</td>
					<!-- Dynamic Viscosity -->
					<td>$5.41 \times 10^{-4}$</td>
					<!-- Kinematic Viscosity -->
					<td>$5.48 \times 10^{-7}$</td>
				</tr>
				<!-- 55 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>55</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.67</td>
					<!-- Density -->
					<td>986</td>
					<!-- Dynamic Viscosity -->
					<td>$4.98 \times 10^{-4}$</td>
					<!-- Kinematic Viscosity -->
					<td>$5.05 \times 10^{-7}$</td>
				</tr>
				<!-- 60 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>60</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.65</td>
					<!-- Density -->
					<td>984</td>
					<!-- Dynamic Viscosity -->
					<td>$4.60 \times 10^{-4}$</td>
					<!-- Kinematic Viscosity -->
					<td>$4.67 \times 10^{-7}$</td>
				</tr>
				<!-- 65 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>65</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.62</td>
					<!-- Density -->
					<td>981</td>
					<!-- Dynamic Viscosity -->
					<td>$4.31 \times 10^{-4}$</td>
					<!-- Kinematic Viscosity -->
					<td>$4.39 \times 10^{-7}$</td>
				</tr>
				<!-- 70 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>70</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.59</td>
					<!-- Density -->
					<td>978</td>
					<!-- Dynamic Viscosity -->
					<td>$4.02 \times 10^{-4}$</td>
					<!-- Kinematic Viscosity -->
					<td>$4.11 \times 10^{-7}$</td>
				</tr>
				<!-- 75 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>75</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.56</td>
					<!-- Density -->
					<td>975</td>
					<!-- Dynamic Viscosity -->
					<td>$3.73 \times 10^{-4}$</td>
					<!-- Kinematic Viscosity -->
					<td>$3.83 \times 10^{-7}$</td>
				</tr>
				<!-- 80 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>80</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.53</td>
					<!-- Density -->
					<td>971</td>
					<!-- Dynamic Viscosity -->
					<td>$3.50 \times 10^{-4}$</td>
					<!-- Kinematic Viscosity -->
					<td>$3.60 \times 10^{-7}$</td>
				</tr>
				<!-- 85 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>85</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.50</td>
					<!-- Density -->
					<td>968</td>
					<!-- Dynamic Viscosity -->
					<td>$3.30 \times 10^{-4}$</td>
					<!-- Kinematic Viscosity -->
					<td>$3.41 \times 10^{-7}$</td>
				</tr>
				<!-- 90 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>90</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.47</td>
					<!-- Density -->
					<td>965</td>
					<!-- Dynamic Viscosity -->
					<td>$3.11 \times 10^{-4}$</td>
					<!-- Kinematic Viscosity -->
					<td>$3.22 \times 10^{-7}$</td>
				</tr>
				<!-- 95 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>95</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.44</td>
					<!-- Density -->
					<td>962</td>
					<!-- Dynamic Viscosity -->
					<td>$2.92 \times 10^{-4}$</td>
					<!-- Kinematic Viscosity -->
					<td>$3.04 \times 10^{-7}$</td>
				</tr>
				<!-- 100 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>100</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>9.40</td>
					<!-- Density -->
					<td>958</td>
					<!-- Dynamic Viscosity -->
					<td>$2.82 \times 10^{-4}$</td>
					<!-- Kinematic Viscosity -->
					<td>$2.94 \times 10^{-7}$</td>
				</tr>
			</tbody>
			<!-- Seawater -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="SeWater"><h3>Water, Sea</h3></label>
						<input type="checkbox" name="SeWater" id="SeWater" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>25</h3></td>
					<!-- Specific Gravity -->
					<td><h3>1.030</h3></td>
					<!-- Specific Weight -->
					<td><h3>10.10</h3></td>
					<!-- Density -->
					<td><h3>1030</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$1.03 \times 10^{-3}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$1.00 \times 10^{-6}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
		</table>
	</div>
	
	<!-- Imperial Table -->
	<div class="mySlides fade">
		<H1>Imperial Liquid Properties Sheet</H1>
		<table class="ImpTB" width="100%" style="border-collapse: collapse; border: 1px solid black; text-align: center;">
			<!-- Table Head -->
			<thead>
				<tr class="ImperialTBHeader">
					<th><h2>Liquid Name</h2></th>
					<th><h2>Temperature</h2><p>$^\circ F$</p></th>
					<th><h2>Specific Gravity</h2><p>$sg$</p></th>
					<th><h2>Specific Weight</h2><p>$\gamma$</p><p>($lb/ft^3$)</p></th>
					<th><h2>Density</h2><p>$\rho$</p><p>($slugs/ft^3$)</p></th>
					<th><h2>Dynamic Viscosity</h2><p>$\eta$</p><p>($lbs$-$s/ft^2$)</p></th>
					<th><h2>Kinematic Viscosity</h2><p>$\nu$</p><p>($ft^2/s$)</p></th>
				</tr>
			</thead>
			<!-- Acetone -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="IAcetone"><h3>Acetone</h3></label>
						<input type="checkbox" name="IAcetone" id="IAcetone" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.787</h3></td>
					<!-- Specific Weight -->
					<td><h3>48.98</h3></td>
					<!-- Density -->
					<td><h3>1.53</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$6.60 \times 10^{-6}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$4.31 \times 10^{-6}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Ethyl Alcohol -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td><h3>Alcohol, ethyl</h3></td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.787</h3></td>
					<!-- Specific Weight -->
					<td><h3>49.01</h3></td>
					<!-- Density -->
					<td><h3>1.53</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$2.10 \times 10^{-5}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$1.37 \times 10^{-5}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Methyl Alcohol -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="MethAlc"><h3>Alcohol, Methyl</h3></label>
						<input type="checkbox" name="MethAlc" id="MethAlc" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.789</h3></td>
					<!-- Specific Weight -->
					<td><h3>49.10</h3></td>
					<!-- Density -->
					<td><h3>1.53</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$1.17 \times 10^{-5}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$7.65 \times 10^{-6}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Propyl Alcohol -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="PropAlc"><h3>Alchohol, propyl</h3></label>
						<input type="checkbox" name="PropAlc" id="PropAlc" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.802</h3></td>
					<!-- Specific Weight -->
					<td><h3>49.94</h3></td>
					<!-- Density -->
					<td><h3>1.56</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$4.01 \times 10^{-5}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$2.57 \times 10^{-5}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Aqua ammonia (25%) -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="AqAm"><h3>Aqua ammonia (25%)</h3></label>
						<input type="checkbox" name="AqAm" id="AqAm" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.910</h3></td>
					<!-- Specific Weight -->
					<td><h3>56.78</h3></td>
					<!-- Density -->
					<td><h3>1.77</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>-</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>-</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Benzene -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for=""><h3>Benzene</h3></label>
						<input type="checkbox" name="" id="" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.876</h3></td>
					<!-- Specific Weight -->
					<td><h3>54.55</h3></td>
					<!-- Density -->
					<td><h3>1.70</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$1.26 \times 10^{-5}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$7.41 \times 10^{-6}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Carbon Tetrachloride -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="CTet"><h3>Carbon Tetrachloride</h3></label>
						<input type="checkbox" name="CTet" id="CTet" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>1.590</h3></td>
					<!-- Specific Weight -->
					<td><h3>98.91</h3></td>
					<!-- Density -->
					<td><h3>3.08</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$1.90 \times 10^{-5}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$6.17 \times 10^{-6}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Castor Oil -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="COil"><h3>Castor Oil</h3></label>
						<input type="checkbox" name="COil" id="COil" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.960</h3></td>
					<!-- Specific Weight -->
					<td><h3>59.69</h3></td>
					<!-- Density -->
					<td><h3>3.08</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$1.36 \times 10^{-2}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$7.31 \times 10^{-3}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Ethylene glycol -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="EthGly"><h3>Ethylene Glycol</h3></label>
						<input type="checkbox" name="EthGly" id="EthGly" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>1.100</h3></td>
					<!-- Specific Weight -->
					<td><h3>68.47</h3></td>
					<!-- Density -->
					<td><h3>2.13</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$3.38 \times 10^{-4}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$1.59 \times 10^{-4}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Medium Fuel Oil -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="MedFOil"><h3>Fuel Oil, Medium</h3></label>
						<input type="checkbox" name="MedFOil" id="MedFOil" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.852</h3></td>
					<!-- Specific Weight -->
					<td><h3>53.16</h3></td>
					<!-- Density -->
					<td><h3>1.65</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$6.25 \times 10^{-5}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$3.79 \times 10^{-5}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Heavy Fuel Oil -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="HevFOil"><h3>Fuel Oil, Heavy</h3></label>
						<input type="checkbox" name="HevFOil" id="HevFOil" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.906</h3></td>
					<!-- Specific Weight -->
					<td><h3>56.53</h3></td>
					<!-- Density -->
					<td><h3>1.76</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$2.24 \times 10^{-3}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$1.27 \times 10^{-3}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Gasoline -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="Gas"><h3>Gasoline</h3></label>
						<input type="checkbox" name="Gas" id="Gas" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.68</h3></td>
					<!-- Specific Weight -->
					<td><h3>42.40</h3></td>
					<!-- Density -->
					<td><h3>1.32</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$6.00 \times 10^{-6}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$4.55 \times 10^{-6}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Glycerin -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="Gly"><h3>Glycerin</h3></label>
						<input type="checkbox" name="Gly" id="Gly" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>1.258</h3></td>
					<!-- Specific Weight -->
					<td><h3>78.50</h3></td>
					<!-- Density -->
					<td><h3>2.44</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$2.00 \times 10^{-2}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$8.20 \times 10^{-3}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Kerosene -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="Kerosene"><h3>Kerosene</h3></label>
						<input type="checkbox" name="Kerosene" id="Kerosene" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.823</h3></td>
					<!-- Specific Weight -->
					<td><h3>51.20</h3></td>
					<!-- Density -->
					<td><h3>1.60</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$3.43 \times 10^{-5}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$2.14 \times 10^{-5}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Linseed Oil -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="LOil"><h3>Linseed Oil</h3></label>
						<input type="checkbox" name="LOil" id="LOil" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.930</h3></td>
					<!-- Specific Weight -->
					<td><h3>58.00</h3></td>
					<!-- Density -->
					<td><h3>1.80</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$6.91 \times 10^{-4}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$3.84 \times 10^{-4}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Mercury -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="Hg"><h3>Mercury</h3></label>
						<input type="checkbox" name="Hg" id="Hg" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>13.54</h3></td>
					<!-- Specific Weight -->
					<td><h3>844.9</h3></td>
					<!-- Density -->
					<td><h3>26.26</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$3.20 \times 10^{-5}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$1.22 \times 10^{-6}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Propane -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="Prop"><h3>Propane</h3></label>
						<input type="checkbox" name="Prop" id="Prop" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.495</h3></td>
					<!-- Specific Weight -->
					<td><h3>30.81</h3></td>
					<!-- Density -->
					<td><h3>0.96</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$2.30 \times 10^{-6}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$2.40 \times 10^{-6}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Turpentine -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="Turp"><h3>Turpentine</h3></label>
						<input type="checkbox" name="Turp" id="Turp" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>0.870</h3></td>
					<!-- Specific Weight -->
					<td><h3>54.20</h3></td>
					<!-- Density -->
					<td><h3>1.69</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$2.87 \times 10^{-5}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$1.70 \times 10^{-5}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
			<!-- Water -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="Water"><h3>Water</h3></label>
						<input type="checkbox" name="Water" id="Water" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>1.00</h3></td>
					<!-- Specific Weight -->
					<td><h3>62.3</h3></td>
					<!-- Density -->
					<td><h3>1.93</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$1.86 \times 10^{-5}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$9.62 \times 10^{-6}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<!-- 32 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$32^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>62.4</td>
					<!-- Density -->
					<td>1.94</td>
					<!-- Dynamic Viscosity -->
					<td>$3.66 \times 10^{-5}$</td>
					<!-- Kinematic Viscosity -->
					<td>$1.89 \times 10^{-5}$</td>
				</tr>
				<!-- 40 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$40^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>62.4</td>
					<!-- Density -->
					<td>1.94</td>
					<!-- Dynamic Viscosity -->
					<td>$3.23 \times 10^{-5}$</td>
					<!-- Kinematic Viscosity -->
					<td>$1.67 \times 10^{-5}$</td>
				</tr>
				<!-- 50 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$50^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>62.4</td>
					<!-- Density -->
					<td>1.94</td>
					<!-- Dynamic Viscosity -->
					<td>$2.72 \times 10^{-5}$</td>
					<!-- Kinematic Viscosity -->
					<td>$1.40 \times 10^{-5}$</td>
				</tr>
				<!-- 60 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$60^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>62.4</td>
					<!-- Density -->
					<td>1.94</td>
					<!-- Dynamic Viscosity -->
					<td>$2.35 \times 10^{-5}$</td>
					<!-- Kinematic Viscosity -->
					<td>$1.21 \times 10^{-5}$</td>
				</tr>
				<!-- 70 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$70^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>62.3</td>
					<!-- Density -->
					<td>1.94</td>
					<!-- Dynamic Viscosity -->
					<td>$2.04 \times 10^{-5}$</td>
					<!-- Kinematic Viscosity -->
					<td>$1.05 \times 10^{-5}$</td>
				</tr>
				<!-- 80 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$80^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>62.2</td>
					<!-- Density -->
					<td>1.93</td>
					<!-- Dynamic Viscosity -->
					<td>$1.77 \times 10^{-5}$</td>
					<!-- Kinematic Viscosity -->
					<td>$9.15 \times 10^{-6}$</td>
				</tr>
				<!-- 90 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$90^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>62.1</td>
					<!-- Density -->
					<td>1.93</td>
					<!-- Dynamic Viscosity -->
					<td>$1.60 \times 10^{-5}$</td>
					<!-- Kinematic Viscosity -->
					<td>$8.29 \times 10^{-6}$</td>
				</tr>
				<!-- 100 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$100^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>62.0</td>
					<!-- Density -->
					<td>1.93</td>
					<!-- Dynamic Viscosity -->
					<td>$1.42 \times 10^{-5}$</td>
					<!-- Kinematic Viscosity -->
					<td>$7.37 \times 10^{-6}$</td>
				</tr>
				<!-- 110 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$110^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>61.9</td>
					<!-- Density -->
					<td>1.92</td>
					<!-- Dynamic Viscosity -->
					<td>$1.26 \times 10^{-5}$</td>
					<!-- Kinematic Viscosity -->
					<td>$6.55 \times 10^{-6}$</td>
				</tr>
				<!-- 120 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$120^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>61.7</td>
					<!-- Density -->
					<td>1.92</td>
					<!-- Dynamic Viscosity -->
					<td>$1.14 \times 10^{-5}$</td>
					<!-- Kinematic Viscosity -->
					<td>$5.94 \times 10^{-6}$</td>
				</tr>
				<!-- 130 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$130^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>61.5</td>
					<!-- Density -->
					<td>1.91</td>
					<!-- Dynamic Viscosity -->
					<td>$1.05 \times 10^{-5}$</td>
					<!-- Kinematic Viscosity -->
					<td>$5.49 \times 10^{-6}$</td>
				</tr>
				<!-- 140 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$140^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>61.4</td>
					<!-- Density -->
					<td>1.91</td>
					<!-- Dynamic Viscosity -->
					<td>$9.60 \times 10^{-6}$</td>
					<!-- Kinematic Viscosity -->
					<td>$5.03 \times 10^{-6}$</td>
				</tr>
				<!-- 150 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$150^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>61.2</td>
					<!-- Density -->
					<td>1.90</td>
					<!-- Dynamic Viscosity -->
					<td>$8.90 \times 10^{-6}$</td>
					<!-- Kinematic Viscosity -->
					<td>$4.68 \times 10^{-6}$</td>
				</tr>
				<!-- 160 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$160^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>61.0</td>
					<!-- Density -->
					<td>1.90</td>
					<!-- Dynamic Viscosity -->
					<td>$8.30 \times 10^{-6}$</td>
					<!-- Kinematic Viscosity -->
					<td>$4.38 \times 10^{-6}$</td>
				</tr>
				<!-- 170 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$170^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>60.8</td>
					<!-- Density -->
					<td>1.89</td>
					<!-- Dynamic Viscosity -->
					<td>$7.70 \times 10^{-6}$</td>
					<!-- Kinematic Viscosity -->
					<td>$4.07 \times 10^{-6}$</td>
				</tr>
				<!-- 180 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$180^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>60.6</td>
					<!-- Density -->
					<td>1.88</td>
					<!-- Dynamic Viscosity -->
					<td>$7.23 \times 10^{-6}$</td>
					<!-- Kinematic Viscosity -->
					<td>$3.84 \times 10^{-6}$</td>
				</tr>
				<!-- 190 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$190^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>60.4</td>
					<!-- Density -->
					<td>1.88</td>
					<!-- Dynamic Viscosity -->
					<td>$6.80 \times 10^{-6}$</td>
					<!-- Kinematic Viscosity -->
					<td>$3.62 \times 10^{-6}$</td>
				</tr>
				<!-- 200 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$200^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>60.1</td>
					<!-- Density -->
					<td>1.87</td>
					<!-- Dynamic Viscosity -->
					<td>$6.25 \times 10^{-6}$</td>
					<!-- Kinematic Viscosity -->
					<td>$3.35 \times 10^{-6}$</td>
				</tr>
				<!-- 212 -->
				<tr>
					<!-- Liquid Placeholder (Leave Empty!)-->
					<td></td>
					<!-- Temperature -->
					<td>$212^\circ F$</td>
					<!-- Specific Gravity -->
					<td>1</td>
					<!-- Specific Weight -->
					<td>59.8</td>
					<!-- Density -->
					<td>1.86</td>
					<!-- Dynamic Viscosity -->
					<td>$5.89 \times 10^{-6}$</td>
					<!-- Kinematic Viscosity -->
					<td>$3.17 \times 10^{-6}$</td>
				</tr>
			</tbody>
			<!-- Seawater -->
			<tbody class="labels">
				<tr>
					<!-- Material Title -->
					<td>
						<label for="SeWater"><h3>Water, Sea</h3></label>
						<input type="checkbox" name="SeWater" id="SeWater" data-toggle = "toggle">
					</td>
					<!-- Temperature -->
					<td><h3>$77.4^\circ F$</h3></td>
					<!-- Specific Gravity -->
					<td><h3>1.030</h3></td>
					<!-- Specific Weight -->
					<td><h3>64.00</h3></td>
					<!-- Density -->
					<td><h3>2.00</h3></td>
					<!-- Dynamic Viscosity -->
					<td><h3>$2.15 \times 10^{-5}$</h3></td>
					<!-- Kinematic Viscosity -->
					<td><h3>$1.08 \times 10^{-5}$</h3></td>
				</tr>
			</tbody>
			<!-- Extra info -->
			<tbody class="hide">
				<tr>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<p align="center">Use arrows on sides to switch units! (Metric/Imperial)</p>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
<?php
	include_once 'includes/footer.php';
?>