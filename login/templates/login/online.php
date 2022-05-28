{% load static %}
{% if user.is_authenticated %}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>User Data</title>
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
    h2{
      display:flex;
      justify-content:space-around;

    }
    h2 a {
      text-decoration:none;
      color:white;
    }
    </style>
</head>
<body>
    <a href="/accountInfo">Back</a>
    <table>
  <tr>
    
    <th>Username</th>
    <th>Email</th>
  </tr>
  {% for object in objects %}
  <tr>
    
    <td><div class="spinner-grow spinner-grow-sm text-success"></div> <i class="fa-solid fa-user"></i> {{object.username}} is online</td>
    <td> <a href="/chat">Click here to chat</a> or send an email to: <a href="mailto:{{object.email}}">{{object.email}}</a> for invite to compete.</td>
  </tr>
  {% endfor %}
</table>
<p>Invite friends from <a href="https://www.facebook.com/login/">Facebook</a>, <a href="https://www.instagram.com/accounts/login/"> Intagram</a> or <a href="https://twitter.com/login">Twitter</a> to create an account and compete now,</p>
</body>
</html>
{% else %}
{% include 'login/login.php' %}
{% endif %}