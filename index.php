<html>
	<head>
		<script src="css_js/js/jquery-3.3.1.min.js"></script>
		<script src="css_js/js/control.js"></script>
		<link rel="stylesheet" href="css_js/css/bootstrap.css">
		<!-- Display größe beim Mobile setzten: Bessere Darstellung -->
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
	</head>
<body style = "background-color:lightgray;">
<center>

<h3 style="font-family:Arial;">RaspiRadioControl</h3><br><br>
	<!-- Step auf 5, da die PHP Datei sonst zu oft aufgerufen wird und es so zu laggs seitens Raspberry kommt.
	Kann allerdings zum Testen nach belieben geändert werden -->

 	<button type="button" class="btn btn-secondary" id ="play">Play</button><br>
	<br>
 	<button type="button" class="btn btn-secondary" id="pause">Pause</button><br>
	<br>

 	<button type="button" class="btn btn-secondary" id="next">Next</button><br>
	<br>

	<button type="button" class="btn btn-secondary" id="prev">Previous</button><br>
	<br>

	<button type="button" class="btn btn-secondary" id="volUp">Volume ++</button><br>
	<br>

	<button type="button" class="btn btn-secondary" id="volDown">Volume --</button>

	<span id="status"></span>



</center>

<script src="css_js/js/control.js"></script>
<script src="css_js/js/bootstrap.min.js"></script>
</body>
</html>
