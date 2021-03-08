var graph = new joint.dia.Graph;

var paper = new joint.dia.Paper({
    // put the id of the div element in the '' section to allow jointJS to access
    el: document.getElementById('pressureJoint'),
    model: graph,
    // this is a js width input, you can put anything into here from the js library, for now I have it set as 90% of the client window.
    width: document.body.clientWidth * 0.9,
    // this is identical to the above statement but the clientHeight is a bit hard to understand so it is currently 3 x the client height
    height: document.body.clientHeight * 3.0,
    gridSize: 1
});

var rectangle = new joint.shapes.standard.Rectangle();
	rectangle.resize(100, 100);
	rectangle.position(50, 10);
	rectangle.attr('root/title', 'joint.shapes.standard.Rectangle');
	rectangle.attr('label/text', 'Rectangle');
	rectangle.attr('body/fill', 'lightblue');
	rectangle.addTo(graph);

var circle = new joint.shapes.standard.Circle();
	circle.resize(100, 100);
	circle.position(250, 10);
	circle.attr('root/title', 'joint.shapes.standard.Circle');
	circle.attr('label/text', 'Circle');
	circle.attr('body/fill', 'lightblue');
	circle.addTo(graph);

var textBlock = new joint.shapes.standard.TextBlock();
	textBlock.resize(100, 100);
	textBlock.position(250, 150);
	textBlock.attr('root/title', 'joint.shapes.standard.TextBlock');
	textBlock.attr('body/fill', 'lightgray');
	textBlock.attr('label/text', 'Hyper Text Markup Language');
	// Styling of the label via `style` presentation attribute (i.e. CSS).
	textBlock.attr('label/style/color', 'red');
	textBlock.addTo(graph);

var path = new joint.shapes.standard.Path();
	path.resize(100, 100);
	path.position(50, 150);
	path.attr('root/title', 'joint.shapes.standard.Path');
	path.attr('label/text', 'Path');
	path.attr('body/refD', 'M 0 5 10 0 C 20 0 20 20 10 20 L 0 15 Z');
	path.addTo(graph);

var ellipse = new joint.shapes.standard.Ellipse();
	ellipse.resize(150, 100);
	ellipse.position(450, 10);
	ellipse.attr('root/title', 'joint.shapes.standard.Ellipse');
	ellipse.attr('label/text', 'Ellipse');
	ellipse.attr('body/fill', 'lightblue');
	ellipse.addTo(graph);

var headeredRectangle = new joint.shapes.standard.HeaderedRectangle();
	headeredRectangle.resize(150, 100);
	headeredRectangle.position(450, 150);
	headeredRectangle.attr('root/title', 'joint.shapes.standard.HeaderedRectangle');
	headeredRectangle.attr('header/fill', 'lightgray');
	headeredRectangle.attr('headerText/text', 'Header');
	headeredRectangle.attr('bodyText/text', 'Headered\nRectangle');
	headeredRectangle.addTo(graph);

var polygon = new joint.shapes.standard.Polygon();
	polygon.resize(100, 100);
	polygon.position(650, 150);
	polygon.attr('root/title', 'joint.shapes.standard.Polygon');
	polygon.attr('label/text', 'Polygon');
	polygon.attr('body/refPoints', '0,10 10,0 20,10 10,20');
	polygon.addTo(graph);

var polyline = new joint.shapes.standard.Polyline();
	polyline.resize(100, 100);
	polyline.position(650, 10);
	polyline.attr('root/title', 'joint.shapes.standard.Polyline');
	polyline.attr('label/text', 'Polyline');
	polyline.attr('body/refPoints', '0,0 0,10 10,10 10,0');
	polyline.addTo(graph);



var link = new joint.shapes.standard.Link();
	link.source(rectangle);
	link.target(circle);
	link.addTo(graph);

