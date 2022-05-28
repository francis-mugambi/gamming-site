{% load static %}
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Password Recovery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<style>
body {
  font-family: Arial;
  display: flex;
  align-items: center;
  align-content: center;
  background-color: #F5F7FA;;
}
.container{
  max-width: 700px;
  margin: 70px auto auto auto;
}
input[type=text], select {
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
  background-color: white;
  padding: 20px;
}

</style>
<body>

<div class="container">
<span style="color: red; font-weight:bold;">{{msg}}</span>
  <p><b>Forgot your password? please fill in the form below to recover your account</b></p><hr>
  <form action="/checkuser/" method="post">
    {% csrf_token %}
    <label for="uname">Username</label>
    <input type="text" id="fname" name="uname" placeholder="Enter Your Username.." required="">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="email" placeholder="Enter Your Email.." required="">
  
    <input type="submit" value="Submit">
    <div style="text-align: right;"><a style="text-decoration: none; color: red;" href="/login">Login</a></div>
  </form>
</div>

</body>
</html>
