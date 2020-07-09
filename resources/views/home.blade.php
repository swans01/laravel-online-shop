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
                <div class="title">Produk</div>
                <a style="margin-left:300px" href="{{ route('loginPage') }}">Admin</a>
                <div class="page">
                    @foreach($products as $product)
                    <div class="banner">
                        @if (Storage::disk('local')->has($product->name . '-' . $product->code . '.jpg'))
                            <div class="thumbnail">
                                <img src="{{ route('productImage', ['filename' => $product->name . '-' . $product->code . '.jpg']) }}" alt="" class="img-responsive">
                            </div>
                        @endif

                        <div>{{ $product->name }}</div>
                        <div>Rp.{{ $product->price }}</div>
                        <a class="button" href="{{ route('showOrderInfo', ['product' => $product->name, 'total' => $product->price]) }}">Beli</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
