{% load static %}
{% if user.is_authenticated %}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
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
    <h2 style="background-color:gray; text-align:center;"><span><a href="/userData">Customers details</a></span> <span><a href="/subscribers">subscribers</a> </span> <span><a href="/logoutadmin">logout</a></span></h2>
    <table>
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Real balance</th>
    <th>Demo Balance</th>
  </tr>
  {% for object in objects %}
  <tr>
    <td>{{object.id}}</td>
    <td>{{object.username}}</td>
    <td>{{object.email}}</td>
    <td>{{object.phone}}</td>
    <td>{{object.real_balance}}</td>
    <td>{{object.demo_balance}}</td>
    
  </tr>
  {% endfor %}
</table>
<p>{{userdata.username}}</p>
</body>
</html>
{% else %}
{% include 'login/admin.php' %}
{% endif %}