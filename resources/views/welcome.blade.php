<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: lightgrey;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                margin-top: 40px;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .content {
                text-align: center;
                width: 400px;
                background-color: white;
                height: 600px;
            }

            .form_login{
                text-align: left;
                margin-left: 10%;
                margin-top: 50%;
            }

            .form_input{
                box-sizing : border-box;
                width: 90%;
                padding: 10px;
                font-size: 11pt;
                margin-bottom: 20px;
            }

            .btn_login{
                background: #1e8c21;
                color: white;
                font-size: 11pt;
                width: 90%;
                border: none;
                border-radius: 3px;
                padding: 10px 20px;
            }

        </style>
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
