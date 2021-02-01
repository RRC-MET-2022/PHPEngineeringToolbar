	<!-- End of mainBody -->
	</div>

	<!-- Nav Bar Animation Script -->
	<script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "15%";
		  document.getElementById("mainContent").style.marginLeft = "15%";
		  document.getElementById("sideNavBtn").style.opacity = "0%";
		  document.getElementById("navTb").style.marginLeft = "15%";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		  document.getElementById("mainContent").style.marginLeft= "35px";
		  document.getElementById("sideNavBtn").style.opacity = "100%";
		  document.getElementById("navTb").style.marginLeft = "35px";
		}
	</script>
	<!-- Dropdown Script -->
	<script>
		/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
		var dropdown = document.getElementsByClassName("dropdown-btn");
		var i;

		for (i = 0; i < dropdown.length; i++) {
		  dropdown[i].addEventListener("click", function() {
		  this.classList.toggle("active");
		  var dropdownContent = this.nextElementSibling;
		  if (dropdownContent.style.maxHeight) {
		  dropdownContent.style.maxHeight = null;
		  } else {
		  dropdownContent.style.maxHeight = dropdownContent.scrollHeight + "px";
		  }
		  });
		}
	</script>
	<!-- Slideshow Script -->
		<script>
			var slideIndex = [1,1,1];
			var slideId = ["mySlides1", "mySlides2", "mySlides3"]
			showSlides(1, 0);
			showSlides(1, 1);
			showSlides(1, 2);

			function plusSlides(n, no) {
			  showSlides(slideIndex[no] += n, no);
			}

			function showSlides(n, no) {
			  var i;
			  var x = document.getElementsByClassName(slideId[no]);
			  if (n > x.length) {slideIndex[no] = 1}    
			  if (n < 1) {slideIndex[no] = x.length}
			  for (i = 0; i < x.length; i++) {
			     x[i].style.display = "none";  
			  }
			  x[slideIndex[no]-1].style.display = "block";  
			}
		</script>

		<!-- Collapsible Script for Animation -->
		<script>
			var coll = document.getElementsByClassName("collapsible");
			var i;

			for (i = 0; i < coll.length; i++) {
			  coll[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var content = this.nextElementSibling;
			    if (content.style.maxHeight){
			      content.style.maxHeight = null;
			    } else {
			      content.style.maxHeight = content.scrollHeight + "px";
			    } 
			  });
			}
		</script>

		<!-- Navigation Bar -->
	<table id="navTb" class="navTb"><tr>
		<!-- SideNavBar -->
		<td width="2%"><div id="navEl" class="navEl" style="background-color:#ffffff00">
			<img src="../img/plus.png" class="sideNavBtn grow" id="sideNavBtn" onclick="openNav()">
		</div></td>
		<!-- Mathimatics -->
		<td width="14%" align="center"><a href="../mathamatics"><div id="navEl" class="navEl">
			<p id="navTxt" class="navTxt">Mathimatics</p>
			<img src="../img/math.png" class="navImg grow" id="navImg">
		</div></a></td>
		<!-- Mechanical -->
		<td width="17%" align="center"><a href="../mechanical"><div id="navEl" class="navEl">
			<p id="navTxt" class="navTxt">Mechanical Design</p>
			<img src="../img/gear.png" class="navImg grow" id="navImg">
		</div></a></td>
		
		<!-- Electrical -->
		<td width="17%" align="center"><a href="../electrical"><div id="navEl" class="navEl">
			<p id="navTxt" class="navTxt">Electrical Engineering</p>
			<img src="../img/bolt.png" class="navImg grow" id="navImg">
		</div></a></td>

		<!-- Fluid Mechanics -->
		<td width="17%" align="center"><a href="../fMech"><div id="navEl" class="navEl">
			<p id="navTxt" class="navTxt">Fluid Mechanics</p>
			<img src="../img/drop.png" class="navImg grow" id="navImg">
		</div></a></td>

		<!-- Material Science -->
		<td width="17%" align="center"><a href="../matSci"><div id="navEl" class="navEl">
			<p id="navTxt" class="navTxt">Material Science</p>
			<img src="../img/carbon.gif" class="navImg grow" id="navImg">
		</div></a></td>
		
		<!-- About Me -->
		<td width="17%" align="center"><a href="../aboutMe"><div id="navEl" class="navEl">
			<p id="navTxt" class="navTxt">About Me</p>
			<img src="../img/profile.png" class="navImg grow" id="navImg">
		</div></a></td>

		<!-- News -->
		<td width="15%" align="center"><a href="../nindex"><div id="navEl" class="navEl">
			<p id="navTxt" class="navTxt">News</p>
			<img src="../img/news.png" class="navImg grow" id="navImg">
		</div></a></td>
	</tr></table>
	
	<!-- Footer -->
	<div id="footer" class="footer"><table class="footerTb" id="footerTb">
		<tr>
			<th width="33%" align="left">Date Updated: January 2021</th>
			<th width="33%" align="center"><p>Designed and created by Alexander Schonwetter</p></th>
			<!-- Social Logos -->
			<th width="33%" align="right"><div>
				<table id="socialButtons" class="socialButtons">
					<tr>
						<td><a href="https://www.linkedin.com/in/alexander-schonwetter-33a820183/"><img src="../img/linkedin.png" class="grow"></a></td>
						<td><a href="mailto:alex.schonwetter@gmail.com"><img src="../img/enevelope.png" class="grow"></a></td>
						<td><a href="https://www.youtube.com/channel/UCqXJYywwtdoPYTtIgCfxa2w"><img src="../img/youtube.png" class="grow"></a></td>
					</tr>
				</table>
			</div></th>
		</tr>
	</table></div>

</body>
</html>