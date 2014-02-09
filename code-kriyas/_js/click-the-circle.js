var stage, texty1, texty2, circle1;

function init() {
	stage = new createjs.Stage("canvas");
	
	//for onMouseOver and onMouseOut events, this needs to be enabled:
	stage.enableMouseOver();

	texty1 = new createjs.Text(" ", "12px monospace", "purple");
	texty1.x = 25;
	texty1.y = 45;
	
	texty2 = new createjs.Text("click the big circle", "12px monospace", "red");
	texty2.x = 25;
	texty2.y = 15;	
	stage.addChild(texty2);
	

	//create the display objects:
	circle1 = new createjs.Shape();
	circle1.graphics.beginFill("lightgray").drawCircle(0, 0, 200);
	circle1.x = 300;
	circle1.y = 210;
	//not sure why we name the var? this was in tutorial code.
	circle1.name = "circle1";

	stage.addChild(circle1);
	
	//'on' is a method which extends 'addEventListener'
	circle1.on("click", clickerDicker);
	circle1.on("mouseover", rolly);
	circle1.on("mouseout", rollyOff);

	stage.update();

}

function clickerDicker(event) {
	//move something around
	circle1.x -= 10;
	//stage gets continually updated:
	stage.update(event);
}

function rolly(event){
	texty1.text = 'One dog is growling at another over a stuffed duck.';
	stage.addChild(texty1);
	stage.update(event);
}

function rollyOff(event){
	stage.removeChild(texty1);
	stage.update(event);
}