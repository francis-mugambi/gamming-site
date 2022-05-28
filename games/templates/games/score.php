{% load static %}
{% if user.is_authenticated %}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score</title>
</head>
<body style="margin:20px">
<span><a href="/accountInfo">Back</a></span>
<h2>Scores</h2>
 {% for queryset in querysets %}
 {% for omponent in queryset %}
    <p>{{omponent.username}} scored: {{omponent.real_balance}}</p>
 
 {% endfor %}
 {% endfor %}
</body>
</html>
{% else %}
{% include 'login/login.php' %}
{% endif %}