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
                    <table>
                    <tr>
                        <th style="width:25%">Order Code</th>
                        <th style="width:25%">Product</th>
                        <th style="width:25%">Total Order</th>
                        <th style="width:25%">Action</th>
                    </tr>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->code }}</td>
                        <td>{{ $order->product }}</td>
                        <td>Rp.{{ $order->total }}</td>
                        <td>
                        <div style="display: flex">
                        <a style="font-size: 13px; margin:0 0 0 5px" href="{{ route('deleteOrder', ['order_id' => $order->id]) }}">Delete</a>
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
