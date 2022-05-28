{% load static %}
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Francis Mugambi">

    <meta name="description" content="">
    <link rel="stylesheet" href="{% static 'cssfiles/login-signup.css' %}">
    
  </head>
  <style>
        .input-icons i {
            position: absolute;
        }
          
        .input-icons {
            width: 100%;
            margin-bottom: 10px;
        }
          
        .icon {
            padding: 21px 0 0 0;
            color: green;
            min-width: 50px;
            text-align: center;
        }
        .eye{
          position: absolute;
          right: 0;
          cursor: pointer;
        }
        .input-field {
            width: 100%;
            padding: 10px;
            text-align: center;
        }
          
        h2 {
            color: green;
        }
    </style>
<body>
<div id="id01" class="modal">
  <form class="modal-content1 animate" action="/allowLogin/" method="post" autocomplete="off">
  {% csrf_token %}
    <div class="imgcontainer">
      <!--<span title="Close"><a style="font-size: 40px; float: right; margin: -20px 10px 0 0; text-decoration: none; font-weight:bold;" href="/">&times;</a></span>-->
      <img src="{% static 'images/img_avatar2.png' %}" alt="Avatar" class="avatar"><br>
      <span style="font-size:30px;">Login</span><br><br>
      <span onclick="document.getElementById('id011').style.display='block'" style="width:auto;"><a style="text-decoration: none; color:seagreen;" href="/signup">Don't have an acount? Signup</a></span><br><br>
      
      <span style="color: red; font-weight:bold;">{{msg1}}</span>
    </div>

    <div class="container">
      <label for="email"><b>Username</b></label>
      <div class="input-icons">
        <i class="fa fa-user icon"></i>
        <input class="input-field" type="text" placeholder="Enter Username" name="uname" pattern="[A-Za-z0-9]{5,15}" title="Username should have 5-15 characters! with no white spaces!" required autofocus="on" autocomplete="off">
      </div>
      <label for="password"><b>Password</b></label>
      <div class="input-icons" style="position: relative;">
        <i class="fa fa-key icon"></i>
        <i onclick = "myFunction()" class="fa-solid fa-eye icon eye"></i>
        <input class="input-field"  id="myInput" type="password" placeholder="Enter Password" pattern="[A-Za-z0-9]{5,20}" title="Please enter more than five characters." name="password" required>
      </div>
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        <span style="margin-left:70px; padding-left:50px"><a href="/forgotpassword"> Forgot password?</a></span>
      </label>
    </div>
  </form>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>

