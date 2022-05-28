{% load static %}
{% if user.is_authenticated %}
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<title>Welcome to your gamming account</title>
	<style>
		body{
			background-color: #F5F7FA;
			font-family: Arial,Helvetica,sans-serif;
			
		}
		#col1{
			width: 25%;
		}
		#side-nav{
			margin-top: -15px;
			list-style-type: none;
			background-color: white;
			height: 100vh;
		}
		#side-nav li{
			padding-top: 20px;
			text-decoration: none;
		}
		#side-nav li a{
			text-decoration: none;
			color: black;
		}
		#side-nav li a:hover{
			color: red;
		}
		div{
			float: left;
		}
		h3{
			background-color: green;
			color: white;
			border-radius: 7px;
			text-align: center;
			padding: 15px;
			z-index: 11;
		}
		#deposit{
			background-color: red;

		}
		#open{
			display: none;
			cursor: pointer;
			font-size: 25px;
		}
		#close{
			float: right;
			padding: 20px;
			display: none;
		}
		#deposit a{
			color: white;
			text-decoration: none;
		}
		#logout{
		    	color: rgba(0, 250, 0, 0.8);
		    	float:right;
		    	font-size:20px;
		    	margin-right:10px;
		}
		#logout a {
		    text-decoration:none;
		    color: white;
		    font-size: 16px;
		}

		/* Extra small devices (phones, 600px and down) */
		@media only screen and (max-width: 700px) {
			div{
				float: none;
			}
			#side-nav{
				display: none;
			}
			#open{
				display: block;
				float: left;
			}
			#col1{
				width: 100%;
			}
			#close{
				display: block;
				font-size: 30px;
				cursor: pointer;
			}
		}

	</style>
</head>
<body>

 
	<h3><span id="open">&#9776;</span>Welcome {{object.username}} <span id="logout"><a href="/logout"> Logout</a></span></h3>
<div id="col1">
	
	<ul id="side-nav">
		<span id="close">&times;</span>
		<li><a href="/accountInfo">Account Info</a></li>
		<li><a href="/compete">Compete</a></li>
		<li><a href="/online">See who is online</a></li>
		<li><a href="/chat">Chatting Area</a></li>
		<li><a href="/playGames">Play Games</a></li>
	</ul>
</div>

<div id="col2" style="padding-left: 20px;">
	<span><b>{{object.phone}}</b></span><br><hr>
	<p>Your demo accont balance is:${{object.demo_balance}}</p>
	<p>Your real account balance is:${{object.real_balance}}</p>
	<p>Please add funds to your account <span id="deposit"><a href="#">DEPOSIT</a></span></p>
</div>

<script>
document.getElementById("open").onclick = displayNav;

function displayNav() {
  document.getElementById("side-nav").style.display = "block";
  document.getElementById("col2").style.display = "none";
}

document.getElementById("close").onclick = closeNav;

function closeNav() {
  document.getElementById("side-nav").style.display = "none";
  document.getElementById("col2").style.display = "block";
}
</script>
</body>
</html>
{% else %}
{% include 'login/login.php' %}
{% endif %}