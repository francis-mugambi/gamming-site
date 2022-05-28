{% load static %}
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet" type="text/css" href="{% static 'cssfiles/global.css' %}">
	<style>
		.contact{
			margin: 10px;
		}
		.contact input[type=text]{
			width: 99%;
			padding: 5px;
			margin: 5px;
		}
		.contact input[type=message]{
			min-height:100px;
			width: 99%;
		}
		.details{
			margin: 10px;
		}
		header .highlight, header .current4 a{
		color: #e8491d;
		font-weight: bold;
		}
	</style>
</head>
<body>
{% include 'home/header.php' %}<br>
	<div class="contact">
	<form  method="POST" action="/sendMessage/">
	{% csrf_token %}
		<p style="font-size:25px">Get in touch with us</p>
		<span style="color: red; font-weight:bold;">{{msg}}</span><br><br>
		Name:<br><input type="text" name="name" required><br><br>
		Email:<br><input type="text" name="email" required><br><br>
		Subject:<br><input type="text" name="subject" required><br><br>
		Message:<br><textarea type="message" name="message" required style="height:100px;width:100%;"></textarea><br><br>
		<button style="cursor:pointer;" type="submit">Send Message</button><br><br><hr><hr>
	</form>
	</div>
	
	<div class="details">
		<span>Email: mail@careerguide.co.ke</span><br><hr>
		<span>Street adress: PO BOX 90420-80100 MSA</span><br><hr>
		<span>Website: www.careerguide.co.ke</span>
	</div>
	<section id="newsletter">
		<div class="container">
			<h1>Subscribe to our news letter</h1>
			<form method="POST" action="/subscriber/">
				{% csrf_token %}
				<input type="email" name="email" placeholder="Enter email..." pattern="[A-Za-z0-9]{1,}[@][A-Za-z]{3,50}[.]{1}[A-Za-z.]{2,5}" title="Enter a valid email!" required  >
				<button style="cursor:pointer;" type="submit" class="button_1">Subscribe</button>
				<span style="color: red; font-weight:bold;">{{msg}}</span><br><br>
			</form>
		</div>
	</section>
	{% include 'home/footer.php' %}
</body>
</html>