<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="margin: 0; padding:0;">
    <div style="padding: 40px; background-color: #e7e6e6; width:fit-content; border-radius:30px; margin-left:auto; margin-right:auto; display:block;">
        <h2 style="text-align:center;">Verification Code!</h2>
        <p style="font-size: 14px; font-weight:bold;">Verification Code : {{ $details['verification_code'] }}</p>
        <b style="color:red;">Note: Please don't share this code with anyone.</b>
        {{-- <a href="{{URL::to('/login')}}" style="text-decoration:none; background-color:chartreuse; border:none; padding:10px; border-radius:8px; color:white; font-weight:bold; cursor: pointer;">Login</a> --}}
    </div>
</body>
</html>
