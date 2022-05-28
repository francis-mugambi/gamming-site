<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose player</title>
</head>
<body>
<span><a href="/accountInfo">Back</a></span><br>
<span style="color: red; font-weight:bold;">{{msg}}</span><br>
    <span>Please enter the Userrname of your omponent.</span><br>
    <span>If you do not have an omponent search for one here <a href="/online">here</a></span><br><br>
    <form action="/addPoints/" method="post">
        {% csrf_token %}
        Userrname: <br><input type="text" name="uname" required><br><br>
        <input type="submit" value="Start the game">
    </form>
</body>
</html>