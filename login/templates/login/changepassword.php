{% load static %}
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Change password</title>
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
input[type=password],input[type=text], select {
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
  background-color: gray;
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
  <p><b style="color:greenh /"><span style="text-transform:uppercase;">{{change_password_sessionid}}</span>, please choose a password to recover your account</b></p><hr>
  <form action="/updatepassword/" method="post">
    {% csrf_token %}  
    <label for="password">Password</label>
    <input type="password" id="fname" name="password" placeholder="Change the password.." pattern="[A-Za-z0-9]{5,20}" title="Please enter more than five characters." required="">

    <label for="rpt_password">Repeat Password</label>
    <input type="password" id="lname" name="rpt_password" placeholder="Repeat the password.." pattern="[A-Za-z0-9]{5,20}" title="Please enter more than five characters." required="">
  
    <input type="submit" value="Change Password">
   <!-- <div style="text-align: right;"><a style="text-decoration: none; color: red;" href="/login">Login</a></div> -->
  </form>
</div>

</body>
</html>
