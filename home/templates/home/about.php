{% load static %}
<!DOCTYPE html>
<html>
<head>
	<title>About Gammers Site</title>
	<link rel="stylesheet" type="text/css" href="{% static 'cssfiles/global.css' %}">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		header .highlight, header .current2 a{
		color: #e8491d;
		font-weight: bold;
		}
	</style>
</head>
<body>
	
{% include 'home/header.php' %}
	<section id="main">
		<div class="container">
			<article id="main-col">
				<h1 class="page-title">About us</h1>
				<p>We create online gammes that can be accessed by anyone across the globe.</p>
				<h1>Vission </h1>
				<p>To become the best gamming website across the globe</p>
				<h1>Mission</h1>
				<p>To become the best entertainment website across the globe and inspire the world</p>
				<aside id="sidebar">
					<h3>What we do</h3>
					<p>GAMMERS SITE is a Professional gamming Platform. Here we will provide you only interesting games, which you will enjoy playing. We're dedicated to providing you the best of gamming, with a focus on dependability and playing games. We're working to turn our passion for gamming into a booming online website. We hope you enjoy our gamming as much as we enjoy offering them to you. I will keep posting more important posts on my Website for all of you. Please give your support and love.</p>
					<p>Thanks For Visiting Our Site</p>
				</aside>
				<h2>Frequent Asked Questions (FAQS)</h2>
				<h4>1. How do I start competing and earn some money in Gammers site?</h4>
				<p>You only have to sign up for free and get an account where you can play games and compete with your friends for cash hurry up! and <a href="/signup">sign up here</a></p>
				<h4>2. Do I have to deposit some money in order to start earning?</h4>
				<p>You can use your demo account to get points that will help you to earn real money.</p>
				<h4>3. How is my data and funds protected?</h4>
				<p>Privacy and protection is our first priolity for our customers you can refer to our <a href="#">privacy</a> & <a href="#">Policy</a> page for more details.</p>
			</article>
		</div>
	</section>
	{% include 'home/footer.php' %}
</body>
</html>