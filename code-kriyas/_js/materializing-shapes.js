var stage, 
	shape1, 
	shape2, 
	data,
	spritesheet,
	animation;

function init(){
	stage = new createjs.Stage("canvas");

	stage.enableMouseOver();

	text1 = new createjs.Text("click the red square.", "12px monospace", "black");
	text1.x = 10;
	text1.y = 10;
	stage.addChild(text1);

	shape1 = new createjs.Shape();
	shape1.graphics.beginFill("black").drawRect(0, 0, 50, 100);
	shape1.x = 100;
	shape1.y = 200;
	// stage.addChild(shape1);

	shape2 = new createjs.Shape();
	shape2.graphics.beginFill("red").drawRect(0, 0, 50, 50);
	shape2.x = 10;
	shape2.y = 30;
	stage.addChild(shape2);
	
	shape2.on("click", clickerDicker);

	data = {
		images: ["pictures-appearing.png"],
		frames: {width:100, height:100},
		animations: {run:[0,2]}
	};
	spriteSheet = new createjs.SpriteSheet(data);
	animation = new createjs.Sprite(spriteSheet, "run");

	stage.addChild(spriteSheet);
	stage.update();

}

function clickerDicker(event){
	console.log("CLICK!");
	stage.addChild(shape1);
	shape1.x = Math.floor((Math.random()*500)+1);
	shape1.y = Math.floor((Math.random()*500)+1);
	stage.update(event);
}