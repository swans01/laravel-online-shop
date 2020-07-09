<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ ('css/style.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div class="flex-center">
            <div class="content">
                <form class="form_login" action="{{ route('signin') }}" method="post">
                @csrf
                    <label>Email</label>
                    <input class="form_input" type="email" name="email" >
            
                    <label>Password</label>
                    <input class="form_input" type="password" name="password" >
            
                    <input type="submit" class="btn_login" value="LOGIN">
                </form>
            </div>
        </div>
    </body>
</html>
