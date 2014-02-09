var stage, circle1, circle2, circle3;

function init() {
	stage = new createjs.Stage("canvas");
	
	circle1 = new createjs.Shape();
	circle1.graphics.beginFill("black").drawCircle(0, 0, 20);
	stage.addChild(circle1);

	circle2 = new createjs.Shape();
	circle2.graphics.beginFill("orange").drawCircle(0, 0, 10);
	stage.addChild(circle2);
	circle2.y = 500;
	circle2.x = 500;

	circle3 = new createjs.Shape();
	circle3.graphics.beginFill("lightblue").drawCircle(0, 0, 12);
	stage.addChild(circle3);
	circle3.x = 100;
	circle3.y = 500;

	createjs.Ticker.on("tick", tick);
	createjs.Ticker.setFPS(30);
}

function tick(event) {
	circle1.x += 3;
	circle1.y +=2;
	circle2.x -=4;
	circle2.y -=5;
	circle3.x +=1;
	circle3.y -=2;
	
	//check to see that circle is still visible on the stage:
	if (circle1.x > stage.canvas.width) {
		circle1.x = 0; 
		circle1.y = 0;
	}
	else if (circle2.x < 0){
		circle2.x = 500;
		circle2.y = 500;
	}
	else if (circle3.y < 0){
		circle3.x = 100;
		circle3.y = 500;
	}
	
	//this gets called every tick...
	//so stage is continually updated b/c it's in this function
	stage.update(event);

}