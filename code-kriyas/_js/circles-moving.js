var stage, circle1, circle2, circle3;

function init() {
	stage = new createjs.Stage("canvas");
	
	circle1 = new createjs.Shape();
	circle1.graphics.beginFill("red").drawCircle(0, 0, 20);
	stage.addChild(circle1);

	circle2 = new createjs.Shape();
	circle2.graphics.beginFill("#6499D0").drawCircle(0, 0, 33);
	stage.addChild(circle2);
	circle2.y = 500;
	circle2.x = 500;

	circle3 = new createjs.Shape();
	circle3.graphics.beginFill("#69B6E5").drawCircle(0, 0, 12);
	stage.addChild(circle3);
	circle3.x = 100;
	circle3.y = 500;

	circle4 = new createjs.Shape();
	circle4.graphics.beginFill("#69C5AE").drawCircle(0, 0, 7);
	stage.addChild(circle4);
	circle4.x = 60;
	circle4.y = 200;

	createjs.Ticker.on("tick", tick);
	createjs.Ticker.setFPS(30);
}

//check to see that circle is still visible on the stage:
function randomStartSpot(min, max){
	return Math.floor((Math.random() * (max - min) + min));
}
function randomTrajectory(min, max){
	return Math.floor((Math.random() * (max - min) + min));
}

function tick(event) {
	circle1.x += 4;
	circle1.y +=2;
	circle2.x -=4;
	circle2.y -=5;
	circle3.x +=1;
	circle3.y -=2;
	circle4.x +=1;
	circle4.y -=3;
	
	//check to see that circle is still visible on the stage:

	if (circle1.x > 1500) {
		circle1.x = 0; 
		circle1.y = Math.random() * (500 - 0) + 0;
	}
	if (circle2.x < 0){
		circle2.x = (Math.random() * (750 - 0) + 0);
		circle2.y = (Math.random() * (750 - 0) + 0);
	}
	if (circle3.y < 0){
		circle3.x = 0;
		circle3.y = 500;
	}	
	if (circle4.y < 0){
		circle4.x = 0;
		circle4.y = (Math.random() * (550 - 0) + 0);
	}

	
	//this gets called every tick...
	//so stage is continually updated b/c it's in this function
	stage.update(event);

}