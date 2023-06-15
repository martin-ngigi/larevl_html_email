<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email </title>
</head>
<body style="background-color: greenyellow;">
    <h2 style="color: aqua;">Welcome, {{$data['user_name']}} </h2>
    <p>We are excited to have you as a new user of YourApp.</p>
    <p>Your registered email is: {{$data['to']}} </p>
    <p>Body: {{$data['body']}}</p>
</body>
</html>