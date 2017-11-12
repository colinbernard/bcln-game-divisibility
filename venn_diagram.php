<!DOCTYPE html>
<html>
<head>
	<title>BCLN - Divisibility</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato"><!-- google web font -->
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<script src="https://bclearningnetwork.com/lib/jquery/jquery-3.1.0.min.js"></script>
	<script src="https://bclearningnetwork.com/lib/createjs/createjs-2015.11.26.min.js"></script><!-- CreateJS library hosted on BCLN server -->
	<script src="lib/ndgmr.Collision.js"></script>
	<script type="text/javascript" src="helper.js"></script><!-- contains helper functions which do not call functions in balloon.js -->
	<script type="text/javascript" src="venn_diagram.js"></script><!-- the main game JS file -->

	<script>
		var questions = [];
		var customStartText = "Test text pls ignore";
		var questionsPerLevel = 10;

		$.getJSON("versions/<?=_GET['title']?>.json", function(json) {
				// TODO: initialize the above variables
		});
	</script>


</head>
<body onload="init();"><!-- body onload calls function to initialize game -->

	<canvas id="gameCanvas" width="650" height="480">
		<!-- game will be rendered here -->
	</canvas>

</body>
</html>