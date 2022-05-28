{% load static %}
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Create Account</title>
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
          margin: 0px 0 0 350px;
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
<div id="id011" class="modal">
  <form class="modal-content1 animate" action="/createAccount/" method="post" autocomplete="off">
  {% csrf_token %}
    <div class="imgcontainer">
      <span style="font-size:27px;"><b>Create an account</b></span><br><br>
       <!--<span title="Close Modal"><a style="font-size: 40px; float: right; margin: -20px 10px 0 0; text-decoration: none; font-weight:bold;" href="/login">&times;</a></span>-->
      <!--<img src="{% static 'images/img_avatar2.png' %}" alt="Avatar" class="avatar"><br>-->
      <span onclick="document.getElementById('id011').style.display='none'" style="width:auto;"><a style="text-decoration: none; color: seagreen;" href="/login">Aready have an account? Login</a></span><br><br>
      <span style="color: red; font-weight:bold;">{{msg}}</span>
    </div>

    <div class="container">
    <label for="uname"><b>Username</b></label>
    <div class="input-icons">
        <i class="fa fa-user icon"></i>
        <input class="input-field" type="text" placeholder="Enter a Username" name="uname" pattern="[A-Za-z0-9]{5,15}" title="Username should have 5-15 characters! with no white spaces!" required autofocus>
      </div>
      <label for="email"><b>Email</b></label>
      <div class="input-icons">
      <i class="fa fa-envelope icon"></i>
      <input class="input-field" type="text" placeholder="Enter Email" name="email" pattern="[A-Za-z0-9]{1,}[@][A-Za-z]{3,50}[.]{1}[A-Za-z.]{2,5}" title="Enter a valid email!" required>
      </div>
      <label for="phone"><b>Phone</b></label>
      <div class="input-icons">
      <i class="fa-solid fa-mobile-screen-button icon"></i>
      <input class="input-field" type="tel" placeholder="Enter Phone number +254..." name="phone" pattern="[+][0-9]{12}" required title="Please enter the correct format e.g. +254712345678" required>
      </div>
      <label for="password"><b>Password</b></label>
      <div class="input-icons">
        <i class="fa fa-key icon"></i>
        <input class="input-field" type="password" placeholder="Enter a Password" name="password" pattern="[A-Za-z0-9]{5,20}" title="Please enter more than five characters." required>
      </div>  
      <label for="password"><b>Repeat Password</b></label>
      <div class="input-icons">
        <i class="fa fa-key icon"></i>
      <input class="input-field" type="password" placeholder="Repeat the password" name="rpt_password" pattern="[A-Za-z0-9]{5,20}" title="Please enter more than five characters." required>
      </div>
      <button type="submit">Create Account</button>
    </div>
  </form>
</div>

</body>
</html>
