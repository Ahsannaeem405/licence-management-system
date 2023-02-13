<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="margin: 0; padding:0;">
    <div style="padding: 40px; background-color: #e7e6e6; width:fit-content; border-radius:30px; margin-left:auto; margin-right:auto; display:block;">
        <h2 style="text-align:center;">Registered!</h2>
        <p style="font-size: 14px; font-weight:bold;">Name : {{ $details['name'] }}</p>
        <p style="font-size: 14px; font-weight:bold;">Email : {{ $details['email'] }}</p>
        <p style="font-size: 14px; font-weight:bold;">Phone : {{ $details['phone'] }}</p>
        <p style="font-size: 14px; font-weight:bold;">Company : {{ $details['company'] }}</p>
        <p style="font-size: 14px; font-weight:bold;">Role : {{ $details['role'] }}</p>
        <p style="font-size: 14px; font-weight:bold;">Address : {{ $details['address'] }}</p>
    </div>
</body>
</html>
