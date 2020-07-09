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
                <div>
                    <a style="margin-left:300px" href="{{ route('addProductView') }}">Add Product</a>                    
                    <table>
                    <tr>
                        <th style="width:25%">Code</th>
                        <th style="width:25%">Name</th>
                        <th style="width:25%">Price</th>
                        <th style="width:25%">Action</th>
                    </tr>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->code }}</td>
                        <td>{{ $product->name }}</td>
                        <td>Rp.{{ $product->price }}</td>
                        <td>
                        <div style="display: flex">
                        <a style="font-size: 13px; margin:0 5px 0 0" href="{{ route('showEditProduct', ['product_id' => $product->id]) }}">Edit</a> | <a style="font-size: 13px; margin:0 0 0 5px" href="{{ route('deleteProduct', ['product_id' => $product->id]) }}">Delete</a>
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
