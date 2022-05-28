{% load static %}
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Gammers Site</title>
	<link rel="stylesheet" type="text/css" href="{% static 'cssfiles/global.css' %}">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		header .highlight, header .current1 a{
		color: #e8491d;
		font-weight: bold;
		}
	</style>
</head>
<body>
	{% include 'home/header.php' %}
	<section id="showcase">
		<div class="container">
			<h1>Are you Looking For a Site For Gamming?</h1>
			<p>This is the best website for you.</p>
		</div>
	</section>
	<section id="newsletter">
		<div class="container">
			<h1>Subscribe to our news letter for future updates.</h1>
			<form method="POST" action="/subscriber/">
				{% csrf_token %}
				<input type="email" name="email" placeholder="Enter email..." pattern="[A-Za-z0-9]{1,}[@][A-Za-z]{3,50}[.]{1}[A-Za-z.]{2,5}" title="Enter a valid email!" required  >
				<button style="cursor:pointer;" type="submit" class="button_1">Subscribe</button>
				<span style="color: red; font-weight:bold;">{{msg}}</span><br><br>
			</form>
		</div>
	</section>
	<hr>
	<section class="container">
		<hr>
		<h2>New in gammers site?</h2>
		<p>Welcome to gammers site the best website for playing games and entertainment. You only have to open an account and deposit cash to your account 
		and start competing with your friends to earn when you win. We support our customers 24/7 incase of any problem encountered. You can withdraw your funds
		anytime and anywhere.  </p>
		<hr>
	</section>
	<section id="boxes">
		<div class="container">
			<h2>What we have for you.</h2>
			<div class="box">
				<h3 id="Graphic"><a href="/chessgame">Chess Game</a></h3>
				<hr>
				<p>We offer chess game to our visitors for free please sign up to play the chess game</p>
				
			</div>
			<div class="box">
				<h3><a href="/savemegame">Save Me Game</a></h3>

				<hr>
				<p>In this game you are expected to save the little ba baby from being hit by the stones. </p>
				
			</div>
			<div class="box">
				<h3><a href="/mathgame">Math Game</a></h3>
				<hr>
				<p>The goal of this game is to get as many correct math problems as you can. All problems are randomly generated and have to be answered within 10 seconds. Sign up to play</p>
				
			</div>
		</div>
	</section>
	
	<div style="text-align:center;">
	
		<img style="width: 80%; margin: auto;" src="{% static 'images/fifa.jpg' %}">
	</div>
	<section class="container">
		<hr><hr>
		<p>We are have to see you at gammers site, we thank you for your loave and support. "When great people come together great things happen
			"</p>
			<hr>
	</section>
	{% include 'home/footer.php' %}
</body>
</html>