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
                <div class="navbar">
                    <a href="{{ route('product') }}">Product</a>
                    <a href="{{ route('order') }}">Orders</a>
                    <a href="{{ route('user') }}">Users</a>
                    <a style="margin-left: 145px" href="{{ route('logout') }}">Logout</a>
                    <div class="separator"></div>
                </div>
                <div class="title">Create Form</div>
                <form class="form_submit" action="{{ route('addProduct') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <label>Name</label>
                    <input class="form_input" type="text" name="name" >
            
                    <label>Price</label>
                    <input class="form_input" type="number" name="price" >

                    <label>Code</label>
                    <input class="form_input" type="text" name="code" >

                    <label for="image">Image</label>
                    <input style="margin-bottom:10px" type="file" name="image" class="form-control" id="image">
            
                    <input type="submit" class="btn_login" value="Submit">
                </form>
            </div>
        </div>
    </body>
</html>
