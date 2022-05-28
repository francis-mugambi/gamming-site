{% load static %}
{% if user.is_authenticated %}
<!DOCTYPE html>
<head>
    <title>Play Chess Game for Free</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="{% static 'javascript/chess.js' %}"></script>
	<style>
		h1,h2,h3{
			text-align:center;
		}
	</style>
</head>
<body>

    <h3>Chess Game</h3>
    <canvas id="chessCanvas" width="400" height="400" style="margin-left:37%;"></canvas>
    <h2 id="currentTeamText"></h2>
    <h2>Red pieces lost:</h2>
    <h3 id="whiteCasualities"></h2>
    <h2>Blue pieces lost:</h2>
    <h3 id="blackCasualities"></h2>
    <h2 id="totalVictories"></h2>
</body>
</html>
{% else %}
{% include 'login/login.php' %}
{% endif %}