
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Sent messages</title>
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
    h3{
      display:flex;
      justify-content:space-around;

    }
    h3 a {
      text-decoration:none;
      color:white;
    }
    </style>
</head>
<body>
    <span><a href="/chat">Back</a></span>
    <h3 style="background-color:gray; text-align:center;"><span><a href="/sent">Sent messages</a> </span></h3>
    <table>
  <tr>
    
    <th>Sent to:</th>
    <th>Message</th>
    
  </tr>
  
  {% for text in texts %}
  <tr>
    <td>{{text.sent_to|title}}</td>
    <td>{{text.message}}</td>
  </tr>
 {% endfor %}
</table>
</body>
</html>
