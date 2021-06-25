<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings</title>
</head>
<body>


    <h3>Welcome to settings page</h3>

        @if(session()->has('error')) 

            <div class="text-danger">
                {{session()->get("error")}}
            </div>

        @endif  <br />

        <form action="/dashboard/settings" method="POST">
            @csrf

            <input type="email" name="unimail" id="" placeholder="provide login email">
        @if($errors->has('unimail'))
            <div class="text-danger">
                {{$errors->first('unimail')}}
            </div>
        @endif
            <br /><br />
        
            <input type="password" name="authpass" id="" placeholder="provide login password">
        @if($errors->has('authpass'))
            <div class="text-danger">
                {{$errors->first('authpass')}}
            </div>
        @endif
            <br /><br />
        

            <input type="text" name="name" id="" placeholder="update your profile name"> 
        @if($errors->has('name'))
            <div class="text-danger">
                {{$errors->first('name')}}
            </div>
        @endif  <br /><br />

            <input type="password" name="password" id="" placeholder="update your password"> 
        @if($errors->has('password'))
            <div class="text-danger">
                {{$errors->first('password')}}
            </div>
        @endif  <br /><br />

            <input type="password" name="confirm" id="" placeholder="confirm your password"> 
        @if($errors->has('confirm'))
            <div class="text-danger">
                {{$errors->first('confirm')}}
            </div>
        @endif  <br /><br />

            <button type="submit">update profile</button>



        
        </form>

        <style>
            .text-danger{
                color:#c0392b;
            }
        </style>
</body>
</html>