<!DOCTYPE html>
<html>
<head>
    <title>Expiry Alert</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="margin: 0; padding:0;">
    <div style="padding: 40px; background-color: #f7f7f7; width:80%; border-radius:30px; margin-left:auto; margin-right:auto; display:block;">
        <h2 style="text-align:center;">License Expiry ALert!</h2>
        <p style="font-size: 14px;">Your license is going to expire on <font style="color:red; font-weight:bold;">{{\Carbon\carbon::createFromFormat('Y-m-d',$details['date_of_expiry'])->format('d-F-Y')}}</font></p>
        <p style="font-size: 14px;">License Title : <b>{{$details['title']}}</b></p>
        <p style="font-size: 14px;"> License Key : <b>{{$details['key']}}</b></p>
    </div>
</body>
</html>
