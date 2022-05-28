
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Received messages</title>
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
    .fa-solid{
      color: green;
    }
    </style>
</head>
<body>
    <span><a href="/chat">Back</a></span>
    <h3 style="background-color:gray; text-align:center;"><span><i class="fa-solid fa-envelopes-bulk"></i> <a href="/received">Received messages</a></span></h3>
    <table>
  <tr>
    
    <th>Received from:</th>
    <th>Message</th>
    
  </tr>
 
  {% for text in texts %}
  <tr>
    <td>{{text.sent_from|title}}</td>
    <td>{{text.message}}  <a href="/chat"><i class="fa-solid fa-reply"></i></a></td>
  </tr>
 {% endfor %}
</table>
</body>
</html>
