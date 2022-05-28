{% load static %}
{% if user.is_authenticated %}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Chatting forum</title>
    <style>
    body{
        margin: 20px;
    }
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
    h4{
      display:flex;
      justify-content:flex-start;

    }
    h4 a {
      text-decoration:none;
      color:white;
    }
    </style>
</head>
<body>
    <span><a href="/accountInfo">Back</a>
    <h4 style="background-color:gray; text-align:center; panding-left: 20px"><span><a href="/chat"><i class="fa-solid fa-message-smile"></i> Chatting Area</a></span></h4>

    <form action="/chat/" method="POST">
        <h3>Send a message to invite a Friend</h3>
        <span style="color: red; font-weight:bold;">{{msg}}</span><br>
        {% csrf_token %}
        From: <br><input type="text" placeholder="Enter your username here..." name="sent_from" value="{{user.username}}" readonly><br><br>
        To:(Use a valid Username) <br><input type="text"  name="sent_to"><br><br>
        Message: <br><textarea type="message" placeholder="Enter your message here..." name="message" style="height:100px"></textarea><br><br>
        <input style="cursor:pointer;" type="submit" value="send message" ><hr>
    </form>
    <h4 style="background-color:gray; text-align:center;"><span style="padding:0 20px 0 10px"><a href="/received"><i class="fa-solid fa-envelope"></i> Received messages</a></span> <span><a href="/sent"> Sent messages</a> </span></h4>
</body>
</html>
{% else %}
{% include 'login/login.php' %}
{% endif %}