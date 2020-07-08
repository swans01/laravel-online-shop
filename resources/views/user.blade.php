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

            .navbar{
                margin-top: 10px;
                text-align: left;
            }

            a {
                color: #636b6f;
                margin-left: 15px;
                font-size: 15px;
                font-weight: 600;
                text-decoration: none;
            }

            .separator {
                border-bottom: 2px solid #636b6f;
                margin-top: 16px;
                margin-bottom: 16px;
            }

            table {
                font-size: 13px;
                font-weight: bold;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center">
            <div class="content">
                <div class="navbar">
                    <a href="{{ route('product') }}">Product</a>
                    <a href="{{ route('order') }}">Orders</a>
                    <a href="{{ route('user') }}">Users</a>
                    <a style="margin-left: 145px" href="https://blog.laravel.com">Logout</a>
                    <div class="separator"></div>
                </div>
                <div>                    
                    <table>
                    <tr>
                        <th style="width:30%">Name</th>
                        <th style="width:40%">Email</th>
                        <th style="width:30%">Action</th>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                        <div style="display: flex">
                        <a style="font-size: 13px; margin:0 5px 0 0" href="https://laravel.com/docs">Edit</a> | <a style="font-size: 13px; margin:0 0 0 5px" href="https://laravel.com/docs">Delete</a>
                        </div>
                        </td>
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
