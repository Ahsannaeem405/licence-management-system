<!DOCTYPE html>
<html>
<head>
    <title> </title>
 
<body>
    <h1>Email: {{ $details['email'] }}</h1>
    <p>Password:{{ $details['password'] }}</p>
  <p>Login url: <a href="{{URL::to('/login')}}">{{URL::to('/login')}}</a></p> 

   
   
</body>
</html>