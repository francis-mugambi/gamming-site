{% load static%}
{% if user.is_authenticated %}
{% include 'login/userdata.php' %}
{% else %}
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<style>
body {
  font-family: Arial;
  background-color: #F5F7FA;  
}
.container{
  max-width: 800px;
  margin: 70px auto auto auto;
}
input[type=password], input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color: #35424a;
  padding: 20px;
  color: white;
}
</style>
<body>
<div class="container">
  <p><b>Admin Login page</b></p><hr>
  <span style="color: red; font-weight:bold;">{{msg}}</span><br><br>
  <form action="/adminLogin/" method="post">
    {% csrf_token %}
    <label for="username">Username</label>
    <input type="text" id="fname" name="uname" placeholder="Username.." autocomplete="off" autofocus required><br>

    <label for="pass">Password</label>
    <input type="password" id="lname" name="psw" placeholder="Password.." required>
  
    <input type="submit" value="Login">
  </form>
</div>
{% endif %}
</body>
</html>
