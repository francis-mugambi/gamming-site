{% load static %}
{% if user.is_authenticated %}
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Free game to play online</title>
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
		#side-nav li, #col2 li{
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
		}
		ul{
			list-style-type: none;
		}
		 ul li a{
			text-decoration: none;
		}
		#deposit{
			background-color: red;

		}
		#open{
			display: none;
			cursor: pointer;
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
<h3><span id="open">&#9776;</span>Welcome {{object.username|capfirst }} <span id="logout"><a href="/logout"> Logout</a></span></h3>
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
	<!-- <h3>Play Games</h3> -->
	<ul>
	<li><a href="/chessgame"><i class="fa-solid fa-chess"></i> Chess Game</a></li>
	<li><a href="/savemegame"><i class="fa-regular fa-child-dress"></i> Save me Game</a></li>
	<li><a href="/mathgame"><i class="fa-solid fa-calculator"></i> Math Game</a></li>
	<li><a href="https://www.addictinggames.com/" target=”_blank”>Browse for more games</a></li>
	<li><a href="https://www.crazygames.com/" target=”_blank”>Browse for more games</a></li>
	<li><a href="https://www.freeonlinegames.com/" target=”_blank”>Browse for more games</a></li>
	</ul>
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