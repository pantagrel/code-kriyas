<html>
	<head>
		<style type="text/css">
			body {
				background-color: #bbb;
				padding: 0px;
				margin: 0px;
			}
			#canvas{
				background-color: #bbb;
			}
		</style>

		<script type="text/javascript" src="http://code.createjs.com/easeljs-0.7.1.min.js"></script>
		<script type="text/javascript">

			var c = createjs;

			// create our app
			function testyApp() {
				
				console.log("hello from inside the app");
			
				var stage = new c.Stage("canvas");
				// var image = new c.Bitmap("circle1.png");
				
				var circle = new createjs.Shape();
				circle.graphics.beginFill("red").drawCircle(0, 0, 50);
				circle.x = 100;
				circle.y = 100;
				stage.addChild(circle);
				stage.update();
				
				c.Ticker.setFPS(30);
				c.Ticker.addEventListener("tick", handleTick);

				function handleTick(event) {
					// //moves drawn object around on tick
					// image.x += 5;
					stage.update();

					// show the ticker/ontick in the console
					console.log('tick');
				}

				// draw a rectangle using Graphics() class
				function resize(){
					canvas.width = window.innerWidth;
					canvas.height = window.innerHeight;

				}
				resize();
				window.onresize = resize;

			}

		</script>

	</head>
	<body onload="testyApp();">
		<canvas id="canvas"></canvas>

	</body>
</html>