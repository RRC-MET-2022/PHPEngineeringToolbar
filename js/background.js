document.addEventListener('DOMContentLoaded',bgcanvas,false);
function bgcanvas() {
	drawBorder();
}

function drawBorder() {

	var cwidth = document.body.clientWidth + 15;

	var cheight = document.body.clientHeight + 165;

	var borderCanvas = document.getElementById("bgd");
	borderCanvas.width = cwidth;
	borderCanvas.height = cheight;
	var bg = borderCanvas.getContext("2d");

	var leftM = 50;
	var rightM = cwidth-leftM;
	var topM = 50;
	var bottomM = cheight-topM;
	var rad = 30
	
	bg.beginPath();
	bg.arc(leftM,topM,rad,(Math.PI),(Math.PI*1.5)); //top left

	bg.arc(rightM,topM,rad,(Math.PI*1.5),(Math.PI*2)); //top right

	bg.arc(rightM,bottomM,rad,(Math.PI*2),(Math.PI*0.5)); //bottom right

	bg.arc(leftM,bottomM,rad,(Math.PI*0.5),(Math.PI));//bottom left

	bg.moveTo(leftM-rad,topM);//top line
	bg.lineTo(leftM-rad,bottomM);//bottom line

	bg.lineWidth = 2;
	bg.strokeStyle = "#ffffff";//Line Color
	bg.stroke();//The final Stroke
	bg.closePath();

	bg.beginPath();

	var xpos = 0;
	var ypos = 0;
	var res = 45;//num pixels between lines
	do {
		bg.moveTo(xpos,0);
		bg.lineTo(xpos,cheight);
		xpos = xpos + res;
	} while (xpos < cwidth);

	do {
		bg.moveTo(0, ypos);
		bg.lineTo(cwidth,ypos);
		ypos = ypos + res;
	} while (ypos < cheight);

	bg.lineWidth = 1;
	bg.strokeStyle = "#7f9efa";//Line Color
	bg.stroke();//The final Stroke
	bg.closePath();

	bg.beginPath();

	//major lines (every 5 lines)
	var secres = 5 * res;
	ypos = 0;
	xpos = 0;

	do {
		bg.moveTo(xpos,0);
		bg.lineTo(xpos,cheight);
		xpos = xpos + secres;
	} while (xpos < cwidth);

	do {
		bg.moveTo(0, ypos);
		bg.lineTo(cwidth,ypos);
		ypos = ypos + secres;
	} while (ypos < cheight);

	bg.lineWidth = 2;
	bg.strokeStyle = "#7f9efa";//Line Color
	bg.stroke();//The final Stroke
	bg.closePath();
}