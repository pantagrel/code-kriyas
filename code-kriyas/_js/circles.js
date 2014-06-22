function init() {
				//herein lies the juice.
				var stage = new createjs.Stage("canvas");
				
				var circle2 = new createjs.Shape();
				circle2.graphics.beginFill("white").drawCircle(0, 0, 150);
				circle2.x = 75;
				circle2.y = 50;
				stage.addChild(circle2);

				var circle = new createjs.Shape();
				circle.graphics.beginFill("gray").drawCircle(0, 0, 50);
				circle.x = 180;
				circle.y = 100;
				stage.addChild(circle);

				var circle3 = new createjs.Shape();
				circle3.graphics.beginFill("red").drawCircle(0, 0, 50);
				circle3.x = 375;
				circle3.y = 150;
				stage.addChild(circle3);


				stage.update();

			}