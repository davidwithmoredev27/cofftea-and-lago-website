<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Document</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<style type="text/css">
		.red {
			background-color: red;
			text-align: center;
		}
		.green {
			background-color: green;
			text-align: center;
		}
		.blue {
			background-color: blue;
			text-align: center;
		}
		.red , .green , .blue {
			color:white;
		}
		p {
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-4 col-s-4 col-md-4 col-lg-4 red">
				<p>hello world</p>
			</div>
			<div class="col-xs-12 col-s-12 col-md-4 col-lg-4 green">
				<p>hello world</p>
			</div>
			<div class="col-xs-12 col-s-12 col-md-4 col-lg-4 blue">
				<p>hello world</p>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>