{% load static %}
<!DOCTYPE html>
<html>
<head>
	<title>Services Offerred at Gammers Site</title>
	<link rel="stylesheet" type="text/css" href="{% static 'cssfiles/global.css' %}">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		header .highlight, header .current3 a{
		color: #e8491d;
		font-weight: bold;
		}
	</style>
</head>
<body>
{% include 'home/header.php' %}
	</section>
	<section id="boxe">
		<div class="container">
			<h3 style="text-align: center; color: green;">These are the Games that we offer please sighn up and play</h3>
			<div class="bo">
				<h3>Chess Game</h3>
				<p>We offer chess game to our visitors for free please sign up to play the chess game</p>
			</div>
			<div class="bo">
				<h3>Save Me Game</h3>
				<p>In this game you are expected to save the little ba baby from being hit by the stones. </p>
			</div>
			<div class="bo">
				<h3>Math Game</h3>
				<p>The goal of this game is to get as many correct math problems as you can. All problems are randomly generated and have to be answered within 10 seconds. Sign up to play</p>
			</div>
			<h3>Random Game</h3>
			<p>Its very easy click a button and a random number is selected, if it happens that you clicked and got the highest score you win!</p>
		</div>
	</section>
	{% include 'home/footer.php' %}
</body>
</html>