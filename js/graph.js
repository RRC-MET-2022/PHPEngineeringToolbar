document.addEventListener('DOMContentLoaded',drawGraph,false);
window.requestAnimFrame = (function(){
	return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function(){
		window.setTimeout(callback, 1000/60);
	};
})();

function drawGraph(cheight, cwidth, res) {
	var curve;
	var graphingCanvas = document.getElementById("graph");
	graphingCanvas.width = cwidth;
	graphingCanvas.height = cheight;
	var graphg = graphingCanvas.getContext("2d");
	drawXGraphLines(cheight, cwidth, graphg, relativeResolution(res));
	drawYGraphLines(cheight, cwidth, graphg, relativeResolution(res));
	drawXMinGraphLines(cheight, cwidth, graphg, relativeResolution(res), res);
	drawYMinGraphLines(cheight, cwidth, graphg, relativeResolution(res), res);
	drawXAxis(cheight, cwidth, graphg);
	drawYAxis(cheight, cwidth, graphg);
	drawLine(curve,graphg);
}

function drawXAxis(cheight, cwidth, graphg) {
	graphg.beginPath();
	graphg.moveTo(0,cheight/2);
	graphg.lineTo(cwidth, cheight/2);
	graphg.lineWidth = 4;
	graphg.strokeStyle = "#000000";
	graphg.stroke();
	graphg.closePath();
}

function drawYAxis(cheight, cwidth, graphg) {
	graphg.beginPath();
	graphg.moveTo(cwidth/2,0);
	graphg.lineTo(cwidth/2,cheight);
	graphg.lineWidth = 4;
	graphg.strokeStyle = "#000000";
	graphg.stroke();
	graphg.closePath();
}

function relativeResolution(res) {
	if (res <= 100 && res > 0) {
		return Math.abs(res);
	} else if (Math.abs(res) % 100 == 0) {
		return 5;
	} else if (res == 0) {
		return 100;
	} else {
		return Math.abs(res) % 100;
	}
}

function drawXGraphLines(cheight, cwidth, graphg, res) {
	graphg.beginPath();
	var xposU=cwidth/2;
	var xposD=cwidth/2;
	do{
		graphg.moveTo(xposU,0);
		graphg.lineTo(xposU,cheight);
		graphg.moveTo(xposD,0);
		graphg.lineTo(xposD,cheight);
		xposU = xposU - res;
		xposD = xposD + res;
	}while(xposU > 0);
	graphg.lineWidth = 1;
	graphg.strokeStyle = "#D5D5D5";
	graphg.stroke();
	graphg.closePath();
}

function drawYGraphLines(cheight, cwidth, graphg, res) {
	graphg.beginPath();
	var yposU=cwidth/2;
	var yposD=cwidth/2;
	do{
		graphg.moveTo(0,yposU);
		graphg.lineTo(cwidth,yposU);
		graphg.moveTo(0,yposD);
		graphg.lineTo(cwidth,yposD);
		yposU = yposU - res;
		yposD = yposD + res;
	} while(yposU > 0);
	graphg.lineWidth = 1;
	graphg.strokeStyle = "#D5D5D5";
	graphg.stroke();
	graphg.closePath();
}

function drawXMinGraphLines(cheight, cwidth, graphg, resRel, res) {
	graphg.beginPath();
	var xposU = cwidth/2;
	var xposD = cwidth/2;
	var ypos = cheight/2 + 30;
	var xTextOffset = 5;
	var numFive = 0;
	var textRes = Math.pow(2, Math.floor(res / 100));
	do{
		if (numFive == 4) {
			graphg.moveTo(xposU,0);
			graphg.lineTo(xposU,cheight);
			graphg.moveTo(xposD,0);
			graphg.lineTo(xposD,cheight);
			graphg.font = "30px Arial";
			graphg.fillText(textRes * -1, xposU + xTextOffset, ypos);
			graphg.fillText(textRes, xposD + xTextOffset, ypos);
			textRes = textRes + Math.pow(2, Math.floor(res / 100));
			numFive = 0;
		}
		numFive += 1;
		xposU = xposU - resRel;
		xposD = xposD + resRel;
	}while(xposU > 0);
	graphg.lineWidth = 2;
	graphg.strokeStyle = "#979797";
	graphg.stroke();
	graphg.closePath();
}

function drawYMinGraphLines(cheight, cwidth, graphg, resRel, res) {
	graphg.beginPath();
	var yposU = cheight/2;
	var yposD = cheight/2;
	var xpos = cheight/2 + 5;
	var yTextOffset = 30;
	var numFive = 0;
	var textRes = Math.pow(2, Math.floor(res / 100));
	do{
		if (numFive == 4) {
			graphg.moveTo(0,yposU);
			graphg.lineTo(cwidth,yposU);
			graphg.moveTo(0,yposD);
			graphg.lineTo(cwidth,yposD);
			graphg.font = "30px Arial";
			graphg.fillText(textRes * -1, xpos, yposU + yTextOffset);
			graphg.fillText(textRes, xpos, yposD + yTextOffset);
			textRes = textRes + Math.pow(2, Math.floor(res / 100));
			numFive = 0;
		}
		numFive += 1;
		yposU = yposU - resRel;
		yposD = yposD + resRel;
	}while(yposU > 0);
	graphg.lineWidth = 2;
	graphg.strokeStyle = "#979797";
	graphg.stroke();
	graphg.closePath();
}

function drawLine(curve, graphg) {
	for(var i = 0; i<150; i++) {
	curves.push( 
		new Curve(
				graphg, 
				new Point(100+i*10,0), 
				new Point(100,400), 
				new Point(-150,150), 
				new Point(285,200)
			)
		);
}
}