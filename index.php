<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>THEMES</title>

	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>

	<div class="sample">
		
		<p> SAMPLE TEXT </p>

		<input type="text" name="text" value="" placeholder="Enter a text">

		<button>Button</button>

		<div class="button_theme">
		
			<input type="submit" class="actif" id="theme1" value="Theme default" />

			<input type="submit" class="" id="theme2" value="Theme White" />

			<input type="submit" class="" id="theme3" value="Theme Black" />

		</div>

	</div>

</body>

<script type="text/javascript" src="jquery-3.6.0.js"></script>
<script type="text/javascript">

	var link = document.getElementsByTagName("link");
	var theme1 = document.getElementById("theme1");
	var theme2 = document.getElementById("theme2");
	var theme3 = document.getElementById("theme3");

	theme1.onclick = function () {

		$('link[href="style2.css"]').remove();
		$('link[href="style3.css"]').remove();
  		$('<link>').attr({'rel':"stylesheet",'type':"text/css",'href':"style1.css"}).appendTo('head');

  		this.className = "actif";
  		theme2.className = "";
  		theme3.className = "";
	}

	theme2.onclick = function () {

		$('link[href="style1.css"]').remove();
		$('link[href="style3.css"]').remove();
  		$('<link>').attr({'rel':"stylesheet",'type':"text/css",'href':"style2.css"}).appendTo('head');

  		this.className = "actif";
  		theme1.className = "";
  		theme3.className = "";
	}

	theme3.onclick = function () {

		$('link[href="style1.css"]').remove();
		$('link[href="style2.css"]').remove();
  		$('<link>').attr({'rel':"stylesheet",'type':"text/css",'href':"style3.css"}).appendTo('head');

  		this.className = "actif";
  		theme1.className = "";
  		theme2.className = "";
	}

</script>

</html>